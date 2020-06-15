<?php
session_start();
if(isset($_SESSION['Nom'])){
$url='https://api.exchangerate-api.com/v4/latest/USD';
//$url='https://api.exchangeratesapi.io/latest';

echo "<p align='right'> Bienvenue ",$_SESSION['Nom'],"</p>";

function KeySearch($json, string $search)
{
	foreach ($json as $key=>$val)
	{
		
		if(is_array($val) || is_object($val)) {
			return KeySearch($val, $search);
		}
		elseif($key == $search)
		{
			return $val;
			break;
		}
	}
	return false;

}
$api=file_get_contents($url);

$json = json_decode($api, true);
$find=KeySearch($json,'date');
}
?>
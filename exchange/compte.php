
<?php

class compte{


public $Nom;    
public $Prenom;
public $Email;
public $datenaissance;
public $telephone;
public $motpasse;

function __construct($Nom="",$Prenom="",$Email="",$datenaissance="",$telephone=0,$motpasse=""){
$this->Nom=$Nom;
$this->Prenom=$Prenom;
$this->Email=$Email;
$this->datenaissance=$datenaissance;
$this->telephone=$telephone;
$this->motpasse=$motpasse;
}


function inscription(){
    require('config.php');
    $cx=new conexion();
    $pdo=$cx->connexion();
    $req="insert into compte values('".$this->Nom."','".$this->Prenom."','".$this->Email."','".$this->datenaissance."','".$this->telephone."','".$this->motpasse."')";
    $pdo->exec($req);

}
function login(){
    require('config.php');
    $cx=new conexion();
    $pdo=$cx->connexion();
    $Email=$this->Email;
    $motpasse=$this->motpasse;
    $req="select *  from compte where email='$Email' and motpasse='$motpasse'";
    $res=$pdo->query($req);
    return $res;    
    
}
function calcul($s,$m){
    $v=$s*$m;
    return $v;
}
}
?>
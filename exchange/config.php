<?php

class conexion{
public function connexion(){
    $cx=  new PDO("mysql:host=localhost;dbname=mini",'root');
    return $cx;
}
}

?>
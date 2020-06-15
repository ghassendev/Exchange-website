<?php

class post {

    
public $id;
public $type;
public $sujet;
public $date;
public $par;

function __construct($id=0,$type="",$sujet="",$date="",$par=""){
$this->id=$id;
$this->type=$type;
$this->sujet=$sujet;
$this->date=$date;
$this->par=$par;
}

function ajout(){
    

    require('config.php');
    $cx=new conexion();
    $pdo=$cx->connexion();
    $req="insert into post values('".$this->id."','".$this->type."','".$this->sujet."','".$this->date."','".$this->par."')";
    $pdo->exec($req);


}

function afficher(){

    require_once("config.php");

    $cx=new conexion();
    $pdo=$cx->connexion();
    $req="select * from post";
    $data=$pdo->query($req);
    
    return $data;
   

}


}
?>
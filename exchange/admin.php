<?php

class admin{

    public $id;
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
function afficherpost(){


        require_once("config.php");
    
        $cx=new conexion();
        $pdo=$cx->connexion();
        $req="select * from post";
        $data=$pdo->query($req);
        
        return $data;

}
function supprimerpost($id){
        require_once("config.php");
        $cnx=new conexion();
        $pdo=$cnx->connexion();
        $req="DELETE FROM post WHERE id=$id";
        $pdo->exec($req);
        
    }
    
function afficheruser(){
    require_once("config.php");
    
    $cx=new conexion();
        $pdo=$cx->connexion();
        $req="select * from compte";
        $data=$pdo->query($req);
        
        return $data;
}
function supprimeruser($Email){
    require_once("config.php");
    $cnx=new conexion();
    $pdo=$cnx->connexion();
    
    $req="DELETE FROM compte WHERE Email='$Email'";
    $res=$pdo->exec($req);
    
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
}
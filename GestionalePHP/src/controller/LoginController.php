<?php
include_once '../includes/classiComuni.php';
if(PHP_SESSION_NONE){
    session_start();
}
$services=null;
$utenteBean=null;

if(isset($_POST['username']) && isset($_POST['password'])){
    $services=new Services();
    $utenteBean=$services->autenticazione($_POST['username'],$_POST['password']);
    if($utenteBean instanceof UtenteBean){
        $_SESSION['auth']=true;
        $_SESSION['username']=$utenteBean->getUsername();
        $_SESSION['idRuolo']=$utenteBean->getIdRuolo();
        $_SESSION['ultimoAccesso']=$utenteBean->getUltimoAccesso();
        header("location:../../web/content/private/home.php");
    }else{
        header("location:../../web/content/error.php");
    }
    
}
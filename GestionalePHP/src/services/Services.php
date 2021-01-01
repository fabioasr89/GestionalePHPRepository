<?php
/**
 * Author Fabio Petricola
 * */
/**Classe dedita alla gestione delle transazioni*/

include_once '../includes/classiComuni.php';
class Services{
    private $loginDAO;
    private $utenteBean;
    public function autenticazione($username,$password){
        $loginDAO=new LoginDAO();
        $auth=false;
        try{
            $utenteBean=$loginDAO->autenticazione($username, $password);
        }catch(Exception $e){
            
        }
        return $utenteBean;
    }
    
}
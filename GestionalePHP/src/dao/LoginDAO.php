<?php
/**
 * Author Fabio Petricola
 * */

/**Classe che gestisce il collegamento con il DBMS*/
include_once '../includes/classiComuni.php';
class LoginDAO{
    
    public function autenticazione($username,$password){
        $conn=null;
        $mysqli=null;
        $pastm=null;
        $result=null;
        $auth=false;
        $pswMD5=null;
        $utenteBean=null;
        try{
            $conn=connection::getInstance();
            $mysqli=$conn->getMysqli();
            if($mysqli instanceof mysqli){
                if($mysqli->connect_error){
                    printf("ERRORE:%s",$mysqli->error);
                }
                $pswMD5=md5($password);
                $pstm=$mysqli->prepare("Select u.username,u.ultimo_accesso,u.id_Ruolo from utente u where u.username=? and u.password=?");
                $pstm->bind_param("ss",$username,$pswMD5);
                $exec=$pstm->execute();
                if($exec){
                  $result=$pstm->get_result();
                  while($row=$result->fetch_assoc()){
                      $utenteBean=new UtenteBean();
                      $utenteBean->setIdRuolo($row['id_Ruolo']);
                      $utenteBean->setUsername($row['username']);
                      $utenteBean->setUltimoAccesso($row['ultimo_accesso']);
                      break;
                  }
                }
            }
        }catch(Exception $e){
            printf("Errore %s",$e->getMessage());
        }finally{
            if(isset($mysqli)){
                $mysqli->close();
            }
        }
        return $utenteBean;
    }
    
}
<?php
/*
 * Author Fabio Petricola
 *
 */

 /**Classe che mappa un utente loggato della nostra applicazione**/
class Utente{
    private $username;
    private $password;
    
    private $idRuolo;
    private $ultimoAccesso;

    /**
     * @return mixed
     */
    public function getIdRuolo()
    {
        return $this->idRuolo;
    }

    /**
     * @return mixed
     */
    public function getUltimoAccesso()
    {
        return $this->ultimoAccesso;
    }

    /**
     * @param mixed $idRuolo
     */
    public function setIdRuolo($idRuolo)
    {
        $this->idRuolo = $idRuolo;
    }

    /**
     * @param mixed $ultimoAccesso
     */
    public function setUltimoAccesso($ultimoAccesso)
    {
        $this->ultimoAccesso = $ultimoAccesso;
    }

    public function getUsername()
    {
        return $this->username;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    function __construct(){
        
    }
    
    
    
    function _costruct2($username,$password){
        $this->password=$password;
        $this->username=$username;
    }
    
    
}
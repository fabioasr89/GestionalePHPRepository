<?php
/**
 * Author Fabio Petricola
 * */
class UtenteBean{
    private $username;
    private $ultimoAccesso;
    private $idRuolo;
    private $descrizioneRuolo;
    
    /**
     * @return mixed
     */
    public function getIdRuolo()
    {
        return $this->idRuolo;
    }

    /**
     * @param mixed $idRuolo
     */
    public function setIdRuolo($idRuolo)
    {
        $this->idRuolo = $idRuolo;
    }

    public function __construct(){
        
    }
    
    public function getUsername()
    {
        return $this->username;
    }

 
    public function getUltimoAccesso()
    {
        return $this->ultimoAccesso;
    }

 
    public function getDescrizioneRuolo()
    {
        return $this->descrizioneRuolo;
    }

  
    public function setUsername($username)
    {
        $this->username = $username;
    }

 
    public function setUltimoAccesso($ultimoAccesso)
    {
        $this->ultimoAccesso = $ultimoAccesso;
    }

   
    public function setDescrizioneRuolo($descrizioneRuolo)
    {
        $this->descrizioneRuolo = $descrizioneRuolo;
    }

    
    
    
}
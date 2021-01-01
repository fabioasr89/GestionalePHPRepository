<?php
/**
 * Author Fabio Petricola
 * */
/**Singleton che gestisce la connessione alla base dati*/
class Connection{
    private static $property;
    private static $instance;
    private $url;
    private $databaseName;
    private $username;
    private $password;
    private $mysqli;
    
    private function __construct() {
        self::$property=parse_ini_file("../../resources/connection.ini");
        $this->url=self::$property['url'];
        $this->username=self::$property['username'];
        $this->password=self::$property['password'];
        $this->databaseName=self::$property['dbName'];
    }
    
    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance=new Connection();
        }
        return Connection::$instance;
    }
    
    public function getMysqli(){
        try{
            $this->mysqli=new mysqli($this->url,$this->username,$this->password,$this->databaseName);
            if($this->mysqli->connect_error){
                printf("Errore nella connessione: %s",$this->mysqli->error);
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
        return $this->mysqli;
    }
}
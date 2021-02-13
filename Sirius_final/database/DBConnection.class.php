<?php


namespace database;

use mysqli;

class DBConnection {
    
    private $mysql_host     = "";
    private $mysql_user     = "";
    private $mysql_pass     = "";
    private $mysql_dbName   = "";
    
    private $connetion      = null;
    
    function __construct() {
        
        include '../etc/sysExample.conf.php';

        $this->setMysql_host    ($mysql_host);
        $this->setMysql_user    ($mysql_user);
        $this->setMysql_pass    ($mysql_pass );
        $this->setMysql_dbName  ($mysql_dbName) ;
        
        $connetion = new mysqli( $this->getMysql_host(), $this->getMysql_user(), $this->getMysql_pass(), $this->getMysql_dbName());
        $this->setConnetion     ( $connetion );
    }
    
    
    public function query ( $cmdSql ){
        
        include '../etc/sysExample.conf.php';
        if ( $dumpCmdSql ){
            
            var_dump( "<br>".$cmdSql."<br>");
            
        }
        
        $resultSet = null;
        if ($cmdSql != ""){
            $resultSet = mysqli_query($this->getConnetion(), $cmdSql);
        }
        return ($resultSet);
    }
    
    public function setMysql_host( $mysql_host ){
        if ($mysql_host == ""){
            $this->mysql_host = "localhost";
        } else{
            $this->mysql_host = $mysql_host;
        }
        
    }
    
    public function getMysql_host(){
        if ($this->mysql_host == ""){
            return("localhost");
        } else{
            return($this->mysql_host);
        }
    }
    
    public function getMysql_user(){
        return $this->mysql_user;
    }
    
    public function setMysql_user($mysql_user){
        $this->mysql_user = $mysql_user;
        return $this;
    }
    
    public function getMysql_pass(){
        return $this->mysql_pass;
    }
    
    public function setMysql_pass($mysql_pass){
        $this->mysql_pass = $mysql_pass;
        return $this;
    }
    
    public function getMysql_dbName(){
        return $this->mysql_dbName;
    }
    
    public function setMysql_dbName($mysql_dbName){
        $this->mysql_dbName = $mysql_dbName;
        return $this;
    }
    
    
    public function getConnetion(){
        return $this->connetion;
    }

    public function setConnetion($connetion){
        $this->connetion = $connetion;
        return $this;
    }

}



?>
<?php

namespace database;

include_once '../database/DBConnection.class.php';


class DBQuery {
    
    private $tableName  = "";
    private $fieldsName = "";
    private $fieldKey   = "";
    
    private $connection = null;
    
    function __construct($tableName, $fieldsName, $fieldKey) {

        $fieldsName = str_replace(" ", "", $fieldsName);
   
        $this->setTableName ( $tableName   );
        $this->setFieldsName( $fieldsName  );
        $this->setFieldKey  ( $fieldKey    );
        $this->setConnection( new DBConnection() );
    }
    
    public function select( $where ){
   
        $cmdSql = 
            " SELECT ".$this->getFieldsName().
            " FROM ".$this->getTableName().
            (($where!="")?(" WHERE " . $where):(""));
        
        $resultSet = $this->getConnection()->query($cmdSql);
        
        return ( $resultSet );
    
    }
    
    public function clearSQLInjection( array $values): array{
        
        for( $i=0; $i<count($values); $i++){
            $values[$i] = str_replace("'", "`", $values[$i]);
        }
        return ($values);
       
    }
    
    public function insert( array $values ){
        
        $qtdFields = count($this->getArrayFieldsName());
        
        if (count($values) != $qtdFields){
            return ( 0 );
        }
        
        $valuesSTR = "'".implode("','", $this->clearSQLInjection($values))."'";
        
        $cmdSql = 
        " INSERT INTO ". $this->getTableName()." (". $this->getFieldsName() . " ) ".
        " VALUES  ( ". $valuesSTR ."  )";
        
        $resultSet = $this->getConnection()->query($cmdSql);
        
        return ( $resultSet );
    }
    
    public function delete( $keyValue ){
        
        $cmdSql = " DELETE FROM ".$this->getTableName(). 
                  " WHERE ".$this->getFieldKey(). " = '".str_replace("'", "`", $keyValue)."'" ; 
        $resultSet = $this->getConnection()->query($cmdSql);
        return ( $resultSet );
    }
    
    public function update( array $values ){
        
        $qtdFields = count($this->getArrayFieldsName());
        
        if (count($values) != $qtdFields){
            return ( 0 );
        }
        $fieldNames =  $this->getArrayFieldsName();
        $values     =  $this->clearSQLInjection($values);
        $cmdSql = "UPDATE ".$this->tableName . " SET ";
        
        $valuesSTR = "";
        for ($i = 1; $i < $qtdFields; $i++) {
            $valuesSTR .= 
                " ".$fieldNames[$i]." = '".$values[$i]."'". (($i==($qtdFields-1))?"":", ") ;
        }
        $cmdSql .= $valuesSTR;
        $cmdSql .= " WHERE ".$this->getFieldKey(). " = '".str_replace("'", "`", $values[0])."'" ; 
        $resultSet = $this->getConnection()->query($cmdSql);
        return ( $resultSet );
    }

    public function getTableName(){
        return $this->tableName;
    }

    public function setTableName($tableName){
        $this->tableName = $tableName;
        return $this;
    }

    public function getFieldsName(){
        return $this->fieldsName;
    }
    
    public function getArrayFieldsName(){
        $arrayFields = explode(',', $this->getFieldsName());
        return ($arrayFields);
    }

    public function setFieldsName($fieldsName){
        $this->fieldsName = $fieldsName;
        return $this;
    }

    public function getFieldKey(){
        return $this->fieldKey;
    }

    public function setFieldKey($fieldKey){
        $this->fieldKey = $fieldKey;
        return $this;
    }

    public function getConnection() : DBConnection{
        return ( $this->connection );
    }

    public function setConnection($connection){
        $this->connection = $connection;
        return $this;
    }

}



?>
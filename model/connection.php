<?php
class connectionDB {
    
    private $ip ="localhost";
    private $user="root";
    private $password="";
    private $nameDatabase="db_tienda";
    private $connection;
    
        
    function __construct(){
        $this->connection= new mysqli($this->ip, $this->user, $this->password, $this->nameDatabase);
        if($this->connection->connect_errno){
            echo "failed connection: ";
            exit();
        }
        else{
            //echo "conecction sucessfully <br>";
        }
    }
    
    function query($consult){
        if($result=  $this->connection->query($consult)){
            return $result;                        
        }
        else{
            $message ="ERROR CONSULT";
            return $message;
        }
    }
    function close(){
        $this->connection->close();
    }

}
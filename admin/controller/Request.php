<?php

class Request extends Conn{

    private $query;
    private $queryResult;
    
    public function setQuery($value){
        $this->query = $value;
    }

    public function getQuery(){
        return $this->query;
    }   

    public function result(){
        $this->queryResult = mysqli_query($this->conn, $this->getQuery());
    }

    public function getResult(){
        return $this->queryResult;
    }
}

?>
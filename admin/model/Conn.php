<?php

class Conn {

    protected $host = 'sql164.main-hosting.eu';
    protected $user = 'u533837016_asv';
    protected $pass = 'gatorade100';
    protected $db = 'u533837016_ainfo';
    protected $conn;

    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function close(){
        return mysqli_close($this->conn);
    }
}

?>
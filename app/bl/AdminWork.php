<?php
require_once "Admin.php";

class AdminWork
{
    public function authorized(){
        $arr = array();
        $conn = new DbConnector();
        $query = "SELECT * FROM users WHERE hesh = '$_SESSION[hesh]'";
        $arr = $conn->select($query);
        return $arr;
    }
}


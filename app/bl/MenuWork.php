<?php
require_once "Menu.php";

class MenuWork
{

    public function GetCategory()
    {
        $arr = array();
        $conn = new DbConnector();
        $query = "SELECT * FROM category ";
        $arr = $conn->select($query);
        return $data;
    }
}
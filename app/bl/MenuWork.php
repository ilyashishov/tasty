<?php
require_once "Menu.php";

class MenuWork
{

    public function GetCategory()
    {
        $arr = array();
        $conn = new DbConnector();
        $query = "SELECT id,name FROM cat";
        $arr = $conn->select($query);
	$arr['test'] = 'test date';
        return $arr;
    }
}

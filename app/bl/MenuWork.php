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
        return $arr;
    }
    public function Goods($id_cat){
    	$arr = array();
        $conn = new DbConnector();
        $query = "SELECT * FROM goods WHERE id_cat = '$id_cat'";
        $arr = $conn->select($query);
        return $arr;
    }

    public function CreateGoods($data){
        $conn = new DbConnector();
        $query = "INSERT INTO goods (\"name\",\"id_cat\",\"desc\",\"m_desc\",\"img\",\"m_img\",\"weight\",\"price\") VALUES('$data[name]','$data[id_cat]','$data[desc]','$data[m_desc]','$data[img]','$data[m_img]','$data[weight]','$data[price]')";
        $conn->select($query);
        return $conn->error();
    }

    public function CrateCategory($data){
        $conn = new DbConnector();
        $query = "INSERT INTO cat (\"name\") VALUES('$data[name]')";
        $conn->select($query);
		print_r($conn->error());
	}
}

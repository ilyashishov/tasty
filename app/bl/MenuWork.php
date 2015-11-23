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
    public function AllGoods($id_cat){
    	$arr = array();
        $conn = new DbConnector();
        $query = "SELECT * FROM goods WHERE id_cat = '$id_cat'";
        $arr = $conn->select($query);
        return $arr;
    }
    public function Goods($id){
    	$arr = array();
        $conn = new DbConnector();
        $query = "SELECT * FROM goods WHERE id = '$id'";
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

	public function UpdateGoods($data){
		$conn = new DbConnector();
        $query = "UPDATE goods SET \"name\" = '$data[name]',\"id_cat\" = '$data[id_cat]',\"desc\" = '$data[desc]',\"m_desc\" ='$data[m_desc]',\"img\" = '$data[img]',\"m_img\" = '$data[m_img]',\"weight\" = '$data[weight]',\"price\" = '$data[price]' WHERE id = '$data[id]'";
        $conn->select($query);
        return $conn->error();
	}
}

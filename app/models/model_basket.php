<?php

class Model_basket extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function set_basket($id)
    {
    	$allPrice = 0;
    	$goods = new MenuWork();
    	$_SESSION['basket'][] = $id;
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
    	$_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }

    public function delete_goods($id){
    	$allPrice = 0;
    	$goods = new MenuWork();
    	foreach ($_SESSION['basket'] as $key => $value) {
        	if($id == $value){
        		unset($_SESSION['basket'][$key]);
        	}
    	}
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
    	$_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }
}

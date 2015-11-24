<?php

class Model_main extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function get_data()
    {
    	$category = new MenuWork();
    	$arr['category'] = $category->GetCategory();
        return $arr;
    }

    public function get_data_basket(){
    	$allPrice = 0;
    	$goods = new MenuWork();
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
    	return print_r(9999);
    }
}
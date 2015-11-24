<?php

class Model_basket extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function set_basket($id)
    {
    	$goods = new MenuWork();
    	$_SESSION['basket'][] = $id;
    	// foreach ($_SESSION['basket'] as $key => $value) {
     //    	$arr = $goods->Goods($value);
    	// }
    	$arr = $goods->Goods($id);
    	return print_r($arr[0][0]['price']);
    }
}

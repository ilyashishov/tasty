<?php

class Model_share extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function get_data()
    {
    	$arr['title'] = 'Доставка еды - Tasty';
        return $arr;
    }

    public function set_shere($id){
    	$allPrice = 0;
    	$goods = new MenuWork();
    	$_SESSION['shere'] = $id;
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
    	$allPrice -= $allPriceShere;
    	$_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }

    public function delete_shere($id){
    	$allPrice = 0;
    	$goods = new MenuWork();
    	$_SESSION['shere'] = 0;
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
    	$allPrice -= $allPriceShere;
    	$_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }

    public function get_all_goods_share(){
        $goods = new MenuWork();
        $arr = $goods->AllShare();
        return $arr;
    }
}
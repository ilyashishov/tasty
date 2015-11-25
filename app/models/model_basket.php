<?php

class Model_basket extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function set_basket($id)
    {
    	$allPrice = 0;
        $allPrice2 = 0;
    	$goods = new MenuWork();
    	$_SESSION['basket'][] = $id;
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }

    public function set_basket_share($id)
    {
        $allPrice = 0;
        $allPrice2 = 0;
        $goods = new MenuWork();
        $_SESSION['basket_share'][] = $id;
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
        foreach ($_SESSION['basket'] as $key => $value) {
            $arr = $goods->Goods($value);
            $allPrice += $arr[0][0]['price'];
        }
        $allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
        return print_r($allPrice);
    }

    public function delete_goods($id){
    	$allPrice = 0;
        $allPrice2 = 0;
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
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }

    public function delete_one_goods($id){
    	$allPrice = 0;
        $allPrice2 = 0;
    	$goods = new MenuWork();
    	foreach ($_SESSION['basket'] as $key => $value) {
        	if($id == $value){
        		unset($_SESSION['basket'][$key]);
        		break;
        	}
    	}
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }
}

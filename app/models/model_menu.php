<?php

class Model_menu extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function get_data()
    {
    	$category = new MenuWork();
    	$arr = $category->GetCategory();
        return $arr;
    }

    public function create($data){
        $goods = new MenuWork();
        $arr = $goods->CreateGoods($data);
        return $arr;
    }

    public function get_crate_category($data){
        $category = new MenuWork();
        $category->CrateCategory($data);
    }
}

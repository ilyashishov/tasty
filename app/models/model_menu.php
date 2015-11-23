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
    public function get_all_goods(){
        $goods = new MenuWork();
        $arr = $goods->AllGoods($this->_data['id']);
        return $arr;
    }
    public function get_goods(){
        $goods = new MenuWork();
        $arr = $goods->Goods($this->_data['id']);
        return $arr;
    }
    public function create($data){
        $goods = new MenuWork();
        $arr = $goods->CreateGoods($data);
        return $arr;
    }

    public function save($data){
        $goods = new MenuWork();
        $arr = $goods->UpdateGoods($data);
        return $arr;
    }

    public function get_crate_category($data){
        $category = new MenuWork();
        $category->CrateCategory($data);
    }
}

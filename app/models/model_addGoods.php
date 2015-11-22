<?php

class Model_addGoods extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function get_data()
    {
    	$category = new MenuWork();
    	$arr['category'] = $category->GetCategory();
        return $arr;
    }
}
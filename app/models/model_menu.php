<?php

class Model_menu extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function get_data()
    {
    	$category = new MenuWork();
    	$arr = $category->GetCategory();
    	$arr['title'] = 'Доставка еды - Tasty';
        return $arr;
    }
}
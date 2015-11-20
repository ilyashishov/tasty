<?php

class Model_delivery extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function get_data()
    {
    	$arr['title'] = 'Доставка еды - Tasty';
        return $arr;
    }
}
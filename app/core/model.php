<?php

class Model {
    protected $_data;

    public function __constract($data){
//        if(!isset($_COOKIE['currentCityId'])){
//            setCookie("currentCityId", "25",time()+(3600*24*30), "/");
//        }
//        if(!isset($_COOKIE['currentCity'])){
//            setCookie("currentCity", "Москва",time()+(3600*24*30), "/");
//        }
//        if(!isset($_COOKIE['currentCityName'])){
//            setCookie("currentCityName", "moskva",time()+(3600*24*30), "/");
//        }
        $this->_data = $data;
    }
    public function get_data() {
    	$data['basket'] = 99999;
    	return $data;
    }
}
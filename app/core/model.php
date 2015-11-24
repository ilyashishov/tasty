<?php

class Model {
    protected $_data;

    public function __constract($data){
        $this->_data = $data;
        $this->_data = $data['basket'] = 99999;
    }
    public function get_data() {
    	
    }
}
<?php

class controller_basket extends Controller{

    function __construct($data){
        $this->model = new Model_basket($data);
        $this->view = new View();
    }

    function action_add(){
        $data = $this->model->set_basket($_POST['id']);
        require $data;
    }
}

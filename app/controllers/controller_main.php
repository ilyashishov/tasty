<?php

class controller_main extends Controller{

    function __construct($data){
        $this->model = new Model_main($data);
        $this->view = new View();
    }

    function action_index(){
        // $data = $this->model->get_data();
        $data['title'] = "Доставка еды - Tasty";
        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}
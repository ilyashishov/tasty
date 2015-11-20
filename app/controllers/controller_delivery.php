<?php

class controller_delivery extends Controller{

    function __construct($data){
        $this->model = new Model_delivery($data);
        $this->view = new View();
    }

    function action_index(){
        $data = $this->model->get_data();
        $data['title'] = "Доставка еды - Tasty";
        $data['description'] = "";
        $data['keywords'] = "";
        $data["menu"][2] = "m_active";
        $data['ext'] = true;
        $this->view->generate('delivery_view.php', 'template_view.php', $data);
    }
}
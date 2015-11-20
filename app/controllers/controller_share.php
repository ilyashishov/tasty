<?php

class controller_share extends Controller{

    function __construct($data){
        $this->model = new Model_share($data);
        $this->view = new View();
    }

    function action_menu(){
        $data = $this->model->get_data();
        $data['title'] = "Доставка еды - Tasty";
        $data['description'] = "";
        $data['keywords'] = "";
        $data["menu"][1] = "m_active";
        $data['ext'] = true;
        $this->view->generate('share_view.php', 'template_view.php', $data);
    }
}
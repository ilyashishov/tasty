<?php

class controller_menu extends Controller{

    function __construct($data){
        $this->model = new Model_menu($data);
        $this->view = new View();
    }

    function action_index(){
        $data = $this->model->get_data();
        $data['title'] = "Доставка еды - Tasty";
        $data['description'] = "";
        $data['keywords'] = "";
        $data["menu"][0] = "m_active";
        $data['ext'] = true;
        $this->view->generate('menu_view.php', 'template_view.php', $data);
    }
}
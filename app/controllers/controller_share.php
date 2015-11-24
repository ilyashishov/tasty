<?php

class controller_share extends Controller{

    function __construct($data){
        $this->model = new Model_share($data);
        $this->view = new View();
    }

    function action_menu(){
        $data = $this->model->get_data();
        $data['title'] = "Доставка еды - Tasty";
        $data["menu"][1] = "m_active";
        $this->view->generate('share_view.php', 'template_view.php', $data);
    }

    function action_add(){
        $data = $this->model->set_shere($_POST['id']);
    }

    function action_update(){
        $data = $this->model->delete_shere();
    }
}
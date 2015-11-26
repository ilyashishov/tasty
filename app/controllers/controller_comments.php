<?php

class controller_comments extends Controller{

    function __construct($data){
        $this->model = new Model_comments($data);
        $this->view = new View();
    }

    function action_index(){
        $data['comments'] = $this->model->get_data();
        $data['title'] = "Доставка еды - Tasty";
        $data['description'] = "";
        $data['keywords'] = "";
        $data['ext'] = true;
        $data["menu"][3] = "m_active";
        $this->view->generate('comments_view.php', 'template_view.php', $data);
    }

    function action_create(){
        echo $_POST;
        $data = $this->model->create_comment($_POST);
        return $data;
    }
}
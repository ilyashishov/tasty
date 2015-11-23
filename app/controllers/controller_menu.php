<?php

class controller_menu extends Controller{

    function __construct($data){
        $this->model = new Model_menu($data);
        $this->view = new View();
    }

    function action_index(){
        $data['goods'] = $this->model->get_data();
        $data['title'] = "Меню - Tasty";
        $data["menu"][0] = "m_active";
        $this->view->generate('menu_view.php', 'template_view.php', $data);
    }

    function action_new(){
        $data = $this->model->get_data();
        $data['title'] = "Новый товар - Tasty";
        $data["menu"][0] = "m_active";
        $this->view->generate('admin/menu/new_view.php', 'template_view.php', $data); 
    }

    function action_new_category(){
        $data = $this->model->get_data();
        $data['title'] = "New category - Tasty";
        $data["menu"][0] = "m_active";
        $this->view->generate('admin/category/new_view.php', 'template_view.php', $data); 
    }

    function action_create(){
        $data = $this->model->create($_POST);
        if($data[0] == 00000 && $data[1] == ''){
            $host = $_SERVER['HTTP_HOST'];
            header('Location: http://'.$host.'/menu/id/'.$_POST['id_cat']);
        }
    }

    function action_crateCategory(){
        $this->model->get_crate_category($_POST);
        if($data[0] == 00000 && $data[1] == ''){
            $host = $_SERVER['HTTP_HOST'];
            header('Location: http://'.$host.'/menu/id/3');
        }
    }
}

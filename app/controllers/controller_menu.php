<?php

class controller_menu extends Controller{

    function __construct($data){
        $this->model = new Model_menu($data);
        $this->view = new View();
    }

    function action_index(){
        $data = $this->model->get_data();
        $data['goods'] = $this->model->get_all_goods();
        $data['title'] = "Меню - Tasty";
        $data["menu"][0] = "m_active";
        if($_GET['q'] == '/menu/id/7/'){
            $this->view->generate('noodles_view.php', 'template_view.php', $data);
        }else{
            $this->view->generate('menu_view.php', 'template_view.php', $data);
        }
    }

    function action_new(){
        $data = $this->model->get_data();
        $data['title'] = "Новый товар - Tasty";
        $data["menu"][0] = "m_active";
        $this->view->generate('admin/menu/new_view.php', 'template_view.php', $data); 
    }

    function action_edit(){
        $data['goods'] = $this->model->get_goods();
        $data['title'] = "Новый товар - Tasty";
        $data["menu"][0] = "m_active";
        $this->view->generate('admin/menu/edit_view.php', 'template_view.php', $data); 
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
        }else{
            print_r($data);
        }
    }

    function action_crateCategory(){
        $this->model->get_crate_category($_POST);
        if($data[0] == 00000 && $data[1] == ''){
            $host = $_SERVER['HTTP_HOST'];
            header('Location: http://'.$host.'/menu/id/3');
        }else{
            print_r($data);
        }
    }

    function action_save(){
        $this->model->save($_POST);
        if($data[0] == 00000 && $data[1] == ''){
            $host = $_SERVER['HTTP_HOST'];
            header('Location: http://'.$host.'/menu/id/'.$_POST['id_cat']);
        }else{
            print_r($data);
        }
    }
}

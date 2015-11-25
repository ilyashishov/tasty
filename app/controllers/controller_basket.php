<?php

class controller_basket extends Controller{

    function __construct($data){
        $this->model = new Model_basket($data);
        $this->view = new View();
    }

    function action_index(){
        $data = $this->model->get_data();
        $data['goods'] = $this->model->get_goods();
        $data['title'] = "Доставка еды - Tasty";
        $this->view->generate('basket_view.php', 'template_view.php', $data);
    }

    function action_final(){
        $data['title'] = "Доставка еды - Tasty";
        $this->view->generate('final_view.php', 'template_view.php', $data);
    }

    function action_add(){
        $data = $this->model->set_basket($_POST['id']);
        return $data;
    }

    function action_add_share(){
        $data = $this->model->set_basket_share($_POST['id']);
        return $data;
    }

    function action_delete(){
        $data = $this->model->delete_goods($_POST['id']);
        return $data;
    }

    function action_delete_one(){
        $data = $this->model->delete_one_goods($_POST['id']);
        return $data;
    }
}

<?php

abstract class Controller {
    public $model;
    public $view;
    public $data;

    function __construct($data)
    {
        $this->view = new View();
        $this->data = $data;
    }

    function action_index()
    {
    }
}
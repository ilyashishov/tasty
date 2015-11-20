<?php

class View {
    public $_template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view = null, $data = null)
    {
        if($template_view === null){
            $template_view = $this->_template_view;
        }
        if(file_exists('app/views/'.$template_view)) {
            include 'app/views/' . $template_view;
        }else{
            echo "no file!";
        }

    }
}
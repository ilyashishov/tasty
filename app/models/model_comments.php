<?php

class Model_comments extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function get_data()
    {
    	$comments = new CommentsWork();
    	$arr = $comments->GetComments();
        return $arr;
    }
}
<?php

class Admin
{
    private $id;
    private $date;
    private $title;
    private $text;
    private $site;
    private $review;

    public function __construct($id, $date, $title, $text, $site=false, $review=false){
        $this->id = $id;
        $this->date = $date;
        $this->title = $title;
        $this->text = $text;
        $this->site = $site;
        $this->review = $review;
    }

    public function login(){
        $arr = array();
        $arr["id"] = $this->id;
        $arr["date"] = Dates::DateString($this->date);
        $arr["title"] = $this->title;
        $arr["text"] = $this->text;
        $this->site !== false ? $arr["site"] = $this->site : false;
        $this->review !== false ? $arr["review"] = $this->review : false;

        return $arr;
    }

}
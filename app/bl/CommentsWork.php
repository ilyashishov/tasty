<?php
class CommentsWork
{

    public function GetComments()
    {
        $arr = array();
        $conn = new DbConnector();
        $query = "SELECT * FROM comments";
        $arr = $conn->select($query);
        return $arr;
    }
}

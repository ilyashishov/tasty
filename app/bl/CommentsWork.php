<?php
require_once "/var/www/tasty72/tasks/comment.class.php";
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

    public function SetComment($arr){
        $conn = new DbConnector();
        $validates = Comment::validate($arr);
        if(!isset($arr['url'])){
            $arr['url'] = '';
        }
        if($validates){
            $query = "INSERT INTO comments(name,url,email,body,admin,dt) VALUES ('".$arr['name']."','".$arr['url']."','".$arr['email']."','".$arr['body']."','".$arr['admin'].",''".date("Y-m-d H:i:s")."')";
            $arr = $conn->select($query);
            $arr['dt'] = date('r',time());
            $arr = array_map('stripslashes',$arr);
            print_r($arr);
            print_r($conn->error());
            $insertedComment = new Comment($arr);

            return json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

        }
        else{
            return '{"status":0,"errors":'.json_encode($arr).'}';
        }
    }

}

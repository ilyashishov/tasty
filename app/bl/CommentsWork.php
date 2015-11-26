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

        if($validates){
            $query = "INSERT INTO comments(name,url,email,body,admin, 'date') VALUES ('".$arr['name']."','".$arr['url']."','".$arr['email']."','".$arr['body']."','".$arr['admin'].",'".date('r',time())."')";
            $arr = $conn->select($query);
            $arr['dt'] = date('r',time());
            $arr['id'] = mysql_insert_id();
            $arr = array_map('stripslashes',$arr);

            $insertedComment = new Comment($arr);

            return json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

        }
        else{
            return '{"status":0,"errors":'.json_encode($arr).'}';
        }
    }

}

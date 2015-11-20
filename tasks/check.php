<?php
require_once __DIR__."/../app/bl/DbConnector.php";
class Check
{
    static function get(){
        $conn = new DbConnector();
        $query = "SELECT * FROM jm_users WHERE id = ".intval($_COOKIE['id']);
        $res = $conn->select($query);

        if (isset($_COOKIE['hash']) && isset($_COOKIE['id'])) {
           if($res[0][0]['session_id']+'' !== $_COOKIE['hash']+''){
                setcookie("id", "", time() + 1, "/");
                setcookie("hash", "", time() +1, "/");
                $arr['check'] = false;
            }
            else{
                // print "User: ".$res[0][0]['login'];
                print  "<p class='user'>User: ".$res[0][0]['login']."</p>";
                $arr['check'] = true;
            }
        }

        return $arr;
    }
}
<?php

session_start();
// here set time zone
date_default_timezone_set("Asia/Bangkok");

//error_reporting(0);

class MainClass
{

    function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "fiverr_twitchboy";
        $this->db = new PDO("mysql:$host", $user, $pw);
        $this->db->exec("CREATE DATABASE IF NOT EXISTS $db");
        $this->db->exec("USE $db");
    }

    function login($u, $pass)
    {

        $to = $this->db->query("SELECT * FROM users where username='$u' AND password='$pass' ");
        if ($to->rowCount() > 0) {
            $_SESSION['admin'] = $to->fetch(PDO::FETCH_ASSOC);
            return 1;
        } else {
            return 0;
        }
    }

    function storeForm($name, $email, $idea)
    {
        $date = date('Y-m-d H:i:s');
        if ($name == null) {
            $stmt = $this->db->prepare("INSERT INTO `ideas`(  `email`, `idea`, `date`) VALUES (?,?,?)");
            $stmt->execute([$email, $idea, $date]);
        } else {
            $stmt = $this->db->prepare("INSERT INTO `ideas`( `name`, `email`, `idea`, `date`) VALUES (?,?,?,?)");
            $stmt->execute([$name, $email, $idea, $date]);
        }
    }

    function getIdeas(){
        return $this->db->query("select * from ideas order by id desc");
    }

}

$use = new MainClass();
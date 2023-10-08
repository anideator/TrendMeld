<?php
require_once './config/dbconnectivity.php';
class insert
{
    public function
    __construct($id, $alias, $pin, $login)
    {
        global $conn;
        $flag = $conn->query("INSERT INTO `user`(`id`, `alias`, `pin`, `login`) VALUES ('$id','$alias','$pin','$login')");
        return $flag;
    }
    public function ___construct($id, $title, $description, $content)
    {
        global $conn;
        $flag = $conn->query("INSERT INTO `contents`(`id`, `title`, `description`, `content`) VALUES ('$id','$title','$description','$content')");
        return $flag;
    }
}

class update
{
    public function __construct($id, $logout)
    {
        global $conn;
        $flag = $conn->query("UPDATE `user` SET `logout`='$logout' WHERE `id`=`$id`");
        return $flag;
    }
}

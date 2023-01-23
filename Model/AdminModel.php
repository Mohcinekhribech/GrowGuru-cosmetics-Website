<?php 
require_once './Model/connection.php';
class AdminModel extends db{
    public function AdminLog($email,$psw){
        $conn = $this->connection();
        $stmt=$conn->query("select * from admin where username='$email' OR password='$psw'");
        $result=$stmt->fetch();
        return $result;
    }
}
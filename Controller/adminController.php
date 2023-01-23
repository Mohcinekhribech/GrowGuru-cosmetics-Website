<?php
require_once 'Model/AdminModel.php';
class AdminController
{
    private $username;
    private $psw;
    function Admin()
    {
        if (isset($_POST["test"])) {
            $this->username = $_POST["email"];
            $this->psw = $_POST["password"];
            $test = new AdminModel;
            $row = $test->AdminLog($this->username,md5($this->psw));
            if (isset($row['username']) && isset($row['password'])&& md5($this->psw) == $row['password']) {
                        $_SESSION['user'] = 'admin';
            } else {
                die('error');
            }
        }
    }
    function Logout()
    {
        unset($_SESSION['user']);
    }
}
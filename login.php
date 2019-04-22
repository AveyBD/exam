<?php
class user{
    private $username, $password, $credential;
    funtion public function __construct()
{
    include 'database.php';
    $this->credential = database::connect();
}

function usercheck($username){
        $result=mysqli_query($this->credential, "SELECT count(*) as total from user table where username='$username'");
        $data=mysqli_fetch_assoc($result);
        if($data['total']>0) return true;
        return false;
}
function passcheck($password){
        $result=mysqli_query($this->credential,"SELECT count(*) as total from user table where password='$password'");
        $data=mysqli_fetch_assoc($result);
        if($data['total']>0)return true;
        return false;
}

public function logincheck($username,$password){
        if($this ->usercheck($username)== true){
          if($this->passcheck($password)== true){
              echo "Login Okey";
          }
        }
}
}
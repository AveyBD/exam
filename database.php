<?php
class database{
    public function connect(){
        $credential=mysqli_connect("localhost","root","Password@1");
        mysqli_select_db($credential,"userdb");
        if(!"$credential")
        {
            die("Failed".mysqli_connect_error());
        }
        else
            echo "MySQl is Okey";
}
    function __construct()
    {
    }
}
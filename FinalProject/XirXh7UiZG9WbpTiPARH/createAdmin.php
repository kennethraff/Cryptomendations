<?php
include("Controller.php");


if ($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['username'])&& 
    isset($_POST['password'])&&
    isset($_POST['role']))
    
    {
        
        createleveluserdata($_POST['username'],$_POST['password'],$_POST['role']);
    }
}
header("Location: loginAdminPage.php")
?>
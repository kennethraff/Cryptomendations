<?php
include ("controller.php");
if ($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST["delete_id"])){
        deleteuserdata($_POST["delete_id"]);
    }
}
if ($_SERVER['REQUEST_METHOD']==='GET'){
    if(isset($_GET["delete_id"])){
        deleteuserdata($_GET["delete_id"]);
    }
}
header("Location:userPage.php")
?>
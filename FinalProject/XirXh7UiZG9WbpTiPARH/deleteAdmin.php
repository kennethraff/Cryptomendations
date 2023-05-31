<?php
include ("Controller.php");
if ($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST["delete_admin_id"])){
        deleteleveluserdata($_POST["delete_admin_id"]);
        
        echo "Berhasil delete";
        header("Location:adminPage.php");
    }
    
}

?>
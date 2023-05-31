<?php
include ("Controller.php");
if ($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST["delete_coin_id"])){
        deletecoindata($_POST["delete_coin_id"]);
        
        echo "Berhasil delete";
        header("Location:koinPage.php");
    }
    
}

?>
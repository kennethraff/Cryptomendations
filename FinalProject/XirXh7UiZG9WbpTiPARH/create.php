<?php
include("Controller.php");


function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['Nama'])&& 
    isset($_POST['Email']) && 
    isset($_POST['Negara'])&& 
    isset($_POST['arah'])&& 
    isset($_POST['argumen'])&& 
    isset($_POST['id_coin'])&& 
    isset($_POST['tanggal_target'])){
        
        $dir = "../imageMasuk/";
        $file_name = basename($_FILES['upload_gambar']['name']);
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_size = $_FILES['upload_gambar']['size'];
        $upload_file = $_FILES['upload_gambar']['tmp_name'];
        $random_name = generateRandomString(30);
        $new_name = $random_name . '.' . $file_type;
        if ($file_name == '') {
            echo 'Fill the file';
        } else {
            if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'pdf') {
                echo 'File must be JPG,PNG,or PDF';
            } else {
                if ($file_size > 50000000) {
                    echo 'File must not bigger than 500kb';
                } else {
                    move_uploaded_file($upload_file, $dir . '/' . $new_name);
                    //$query = mysqli_query($conn, "INSERT INTO upload_file(upload_gambar) VALUES ('$new_name')");
                    echo'upload success';
                }
            }
        }
        
        createuserdata($_POST['Nama'],$_POST['Email'],$_POST['Negara'],$_POST['arah'],$_POST['argumen'],$new_name,$_POST['tanggal_tulis'],$_POST['tanggal_target'],$_POST['id_coin']);
    }
}
header("Location: userPage.php")
?>
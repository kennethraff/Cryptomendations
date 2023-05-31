<?php
include("Controller.php");


function generateRandomStringKoin($length = 10)
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
    if(isset($_POST['namaKoin'])&& 
    isset($_POST['keteranganKoin']))
    
    {
        
        $dir = "imageKoin/";
        $file_name = basename($_FILES['gambarKoin']['name']);
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_size = $_FILES['gambarKoin']['size'];
        $upload_file = $_FILES['gambarKoin']['tmp_name'];
        $random_name = generateRandomStringKoin(30);
        $new_coin_name = $random_name . '.' . $file_type;
        if ($file_name == '') {
            echo 'Fill the file';
        } else {
            if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'pdf') {
                echo 'File must be JPG,PNG,or PDF';
            } else {
                if ($file_size > 50000000) {
                    echo 'File must not bigger than 500kb';
                } else {
                    move_uploaded_file($upload_file, $dir . '/' . $new_coin_name);
                    //$query = mysqli_query($conn, "INSERT INTO upload_file(upload_gambar) VALUES ('$new_name')");
                    echo'upload success';
                }
            }
        }
        
        createKoin($_POST['namaKoin'],$_POST['keteranganKoin'],$new_coin_name);
    }
}
header("Location: koinPage.php")
?>
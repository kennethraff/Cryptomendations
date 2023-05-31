<?php

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
?>

<?php include ("importCDN.php");?>
<?php include("Controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Upload Your file</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <b>File Upload</b><input type="file" name="file">
        <input type="submit" name="submit" value="Save">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $dir = "imageMasuk/";
    $file_name = basename($_FILES['file']['name']);
    $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_size = $_FILES['file']['size'];
    $upload_file = $_FILES['file']['tmp_name'];
    $random_name = generateRandomString(30);
    $new_name = $random_name . '.' . $file_type;
    if ($file_name == '') {
        echo 'Fill the file';
    } else {
        if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'pdf') {
            echo 'File must be JPG,PNG,or PDF';
        } else {
            if ($file_size > 500000) {
                echo 'File must not bigger than 500kb';
            } else {
                move_uploaded_file($upload_file, $dir . '/' . $new_name);
                $query = mysqli_query($conn, "INSERT INTO upload_file(upload_gambar) VALUES ('$new_name')");
                echo'upload success';
            }
        }
    }
}

?>
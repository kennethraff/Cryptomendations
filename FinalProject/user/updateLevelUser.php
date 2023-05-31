<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
    <?php include ("importCDN.php");?>
</head>

<body>

    <?php
    include("Controller.php");
    
    if (isset($_GET["update_id"])) {


        $data_to_be_updated = $_GET["update_id"];
        $data = getleveluserdatawithid($data_to_be_updated);

    ?>
        <h1>Update user data with ID <?= $data_to_be_updated ?></h1>
        <form action="updateLevelUser.php" method="POST" enctype="multipart/form-data">
            <p>ID: <input type="text" name="update_level_id" value="<?= $data['id'] ?>"></p>
            <p>Userame :<input type="text" name="update_level_nama" value="<?= $data['usern'] ?>"></p>
            <p>Password: <input type="text" name="update_level_password" value="<?= $data['pass'] ?>"></p>
            <p>Role:<input type="text" name="update_level_role" value="<?= $data['level'] ?>"></p>
            <input type="submit" name="update_submit" value="Update this user">

        </form>
        <?php

    }
    if (isset($_POST["update_submit"])) {

        $id = $_POST['update_level_id'];
        $username = $_POST['update_level_nama'];
        $password = $_POST['update_level_password'];
        $role = $_POST['update_level_role'];
        

        $result = updateleveluserdata($id, $username, $password, $role);


        if ($result == 1) {
        ?>
            <h1>Update user data with ID <?= $id ?> SUCCESS</h1>
            <p>Name: <?= $username ?></p>
            <p>Password: <?= $password ?></p>
            <p>Role: <?= $role ?></p>
            
            <br>
            <a href="adminPage.php" class="btn btn-primary">Back</a>
    <?php
        }
    }


    ?>
    <?php include ("footer.php");?>
</body>

</html>
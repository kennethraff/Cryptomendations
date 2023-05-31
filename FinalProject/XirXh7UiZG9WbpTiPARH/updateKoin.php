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
        $data = getcoindatawithid($data_to_be_updated);

    ?>
        <h1>Update user data with ID <?= $data_to_be_updated ?></h1>
        <form action="updateKoin.php" method="POST" enctype="multipart/form-data">
            <p>ID: <input type="text" name="update_id" value="<?= $data['id'] ?>" readonly></p>
            <p>Name :<input type="text" name="update_Nama" value="<?= $data['nameCoin'] ?>"></p>
            <p>Description: <input type="text" name="update_ketCoin" value="<?= $data['ketCoin'] ?>"></p>
            <p>Picture:<input type="text" name="update_uploadKoin" value="<?= $data['uploadKoin'] ?>"></p>
            <input type="submit" name="update_submit" value="Update this user">

        </form>
        <?php

    }
    if (isset($_POST["update_submit"])) {

        $id = $_POST['update_id'];
        $name = $_POST['update_Nama'];
        $ketCoin = $_POST['update_ketCoin'];
        $uploadKoin = $_POST['update_uploadKoin'];
        

        $result = updatecoindata($id, $name, $ketCoin, $uploadKoin);


        if ($result == 1) {
        ?>
            <h1>Update user data with ID <?= $id ?> SUCCESS</h1>
            <p>Name: <?= $name ?></p>
            <p>Description: <?= $ketCoin ?></p>
            <p>Picture: <?= $uploadKoin ?></p>
            
            <br>
            <a href="koinPage.php" class="btn btn-primary">Back</a>
    <?php
        }
    }


    ?>
    <?php include ("footer.php");?>
</body>

</html>
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
    include("controller.php");
    if (isset($_GET["update_id"])) {


        $data_to_be_updated = $_GET["update_id"];
        $data = getuserdatawithid($data_to_be_updated);

    ?>
        <h1>Update user data with ID <?= $data_to_be_updated ?></h1>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <p>ID: <input type="text" name="update_id" value="<?= $data['id'] ?>" readonly></p>
            <p>Name :<input type="text" name="update_Nama" value="<?= $data['name'] ?>"></p>
            <p>Email: <input type="text" name="update_Email" value="<?= $data['email'] ?>"></p>
            <p>Country:<input type="text" name="update_Negara" value="<?= $data['country'] ?>"></p>
            <p>Direction:<input type="text" name="update_arah" value="<?= $data['heading'] ?>"></p>
            <p>Argument:<input type="text" name="update_argumen" value="<?= $data['argue'] ?>"></p>
            <p>Upload Picture:<input type="text" name="update_uploadGambar" value="<?= $data['uploadPic'] ?>"></p>
            
            <?php $dateWrite = date("Y-m-d\TH:i:s", strtotime($data['dateWrite'])); ?>
            <p>Write date:<input type="datetime-local" name="update_tanggalTulis" value="<?= $dateWrite ?>"></p>

            <?php $dateTarget = date("Y-m-d\TH:i:s", strtotime($data['dateTarget'])); ?>
            <p>Target date:<input type="datetime-local" name="update_tanggalTarget" value="<?= $dateTarget ?>"></p>

            <input type="submit" name="update_submit" value="Update this user">

        </form>
        <?php

    }
    if (isset($_POST["update_submit"])) {

        $id = $_POST['update_id'];
        $name = $_POST['update_Nama'];
        $email = $_POST['update_Email'];
        $country = $_POST['update_Negara'];
        $heading = $_POST['update_arah'];
        $argue = $_POST['update_argumen'];
        $uploadpic = $_POST['update_uploadGambar'];
        $writeDate = $_POST['update_tanggalTulis'];
        $targetDate = $_POST['update_tanggalTarget'];

        $result = updateuserdata($id, $name, $email, $country, $heading, $argue, $uploadpic, $writeDate, $targetDate);


        if ($result == 1) {
        ?>
            <h1>Update user data with ID <?= $id ?> SUCCESS</h1>
            <p>Name: <?= $name ?></p>
            <p>Email: <?= $email ?></p>
            <p>Country: <?= $country ?></p>
            <p>Direction: <?= $heading ?></p>
            <p>Argument: <?= $argue ?></p>
            <p>Upload Picture: <?= $uploadpic ?></p>
            <p>Write date: <?= $writeDate ?></p>
            <p>Target date: <?= $targetDate ?></p>
            <br>
            <a href="userPage.php" class="btn btn-primary">Back</a>
    <?php
        }
    }


    ?>
    <?php include ("footer.php");?>
</body>

</html>
<?php
    include("controller.php");
    


        $data_to_be_updated =78;
        $data = getuserdatawithid($data_to_be_updated);
        
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <p><?= $data['id'] ?></p>
    <p><?= $data['name'] ?></p>
    <p><?= $data['email'] ?></p>
    <p><?= $data['country'] ?></p>
    <p><?= $data['heading'] ?></p>
    <p><?= $data['argue'] ?></p>
    <img src="../imageMasuk/<?= $data['uploadPic'] ?>" alt="" style="width: 100px">
    </body>
    </html>
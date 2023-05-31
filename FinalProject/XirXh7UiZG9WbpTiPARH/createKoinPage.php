<?php include ("Controller.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create Page</title>
    <?php include ("importCDN.php");?>
    
</head>

<body>
    

<div class="row bg-light py-4 liquid">
            <div class="col text-center">
                <h1>Create new</h1>
            </div>

        </div>
    <form action="createKoin.php" method="POST" enctype="multipart/form-data">
        <p class="ms-2">1. Coin name:</p>
        <input type="text" name="namaKoin" class="ms-2">
        <br>
        <p class="ms-2">2. Description:</p>
        <input type="text" name="keteranganKoin" class="ms-2">
        <br>
        <p class="ms-2">3. Logo:</p>
        <input type="file"class="ms-2" name="gambarKoin">
        <br>
        <input type="submit" class="btn btn-primary ms-2" value="Add new coin">


    </form>
    <?php include ("footer.php");?>
</body>

</html>
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
                <h1>Create new Admin</h1>
            </div>
            <a class="btn btn-warning" href="adminPage.php" role="button">Check admin registered</a>
        </div>
    <form action="createAdmin.php" method="POST" enctype="multipart/form-data">
        <p class="ms-2">1. New admin username:</p>
        <input type="text" name="username" class="ms-2">
        <br>
        <p class="ms-2">2. Password:</p>
        <input type="password" name="password" class="ms-2">
        <br>
        <p class="ms-2">3. Role:</p>
        <select class="form-select" aria-label="Default select example" name="role">
            <option selected>Select new admin Role</option>
            <option value="admin">Admin</option>
            
        </select>
        <br>
        <input type="submit" class="btn btn-primary ms-2" value="Add new admin">


    </form>
    <?php include ("footer.php");?>
</body>

</html>
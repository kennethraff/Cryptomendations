<?php include_once("Controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <?php include ("importCDN.php");?>
    <style>
        .grey {
            background-image: linear-gradient(-20deg, #bdc3c7, #2c3e50)
        }

        .fontKdam {
            font-family: 'Kdam Thmor Pro', sans-serif;
            font-size: 16px;
        }

        /* Versi dekstop*/
        @media (min-width: 992px) {
            .nav-link {
                text-transform: uppercase;
                margin-right: 30px;
            }

            .nav-link:hover::after {
                content: '';
                display: block;
                border-bottom: 3px solid blue;
                width: 50%;
                margin: auto;
                padding-bottom: 5px;
                margin-bottom: -8px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark grey fixed-top">
        <div class="container">
            <a class="navbar-brand fontKdam" href="homePage.php">Cryptomendations</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">

                    <a class="nav-link" href="koinPage.php">Coin List</a>
                    <a class="nav-link" href="newRecomPage.php">New post</a>
                    <a class="nav-link text-warning" href="#">UserPage</a>
                    <a class="nav-link" href="CalculatorHP.php">Calculator</a>
                </div>
            </div>
        </div>
    </nav>
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">username</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                
               

            </tr>
        </thead>

        <tbody class="table-group-divider ">
            <tr>
                <?php
                $result = readleveluserdata();
                
                foreach ($result as $barisdata) {
                ?>
                    <th> <?= $barisdata["id"] ?><br><a href="updateLevelUser.php?update_id=<?= $barisdata["id"] ?>"class="btn btn-warning">Update</a><form action="deleteAdmin.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="delete_admin_id" value="<?= $barisdata["id"] ?>">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form></th>
                    
                    <td><?= $barisdata["usern"] ?></td>
                    <td><?= $barisdata["pass"] ?></td>
                    
                    <td><?= $barisdata["level"] ?></td>
                    
                    <td>
                        
                    </td>
                    <td></td>
                    
                    
                    

            </tr>
        <?php
                }

        ?>
        <a href="createNewAdminPage.php" class="btn btn-primary mt-5">Create new admin</a>
        </tbody>
    </table>
    


    <?php include ("footer.php");?>
</body>

</html>
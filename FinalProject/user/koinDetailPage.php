<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include ("importCDN.php");?>
</head>

<body>

    <style>
        .grey {
            background-image: linear-gradient(-20deg, #bdc3c7, #2c3e50)
        }

        .socialive {
            background-image: linear-gradient(90deg, #02aab0, #00cdac)
        }

        .fontKdam {
            font-family: 'Kdam Thmor Pro', sans-serif;
            font-size: 16px;
        }

        .turun {
            margin-top: 50px;
            margin-left: -5px;
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
                    <a class="nav-link" href="CalculatorHP.php">Calculator</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    include("Controller.php");
    
    
    if (isset($_GET["update_id"])) {


        $data_to_be_detail = $_GET["update_id"];
        $data = getcoindatawithid($data_to_be_detail);

    ?>
        <div class="container turun">
            <h1>Detail coin <?= $data['nameCoin'] ?></h1>
           
            
            <form action="updateKoin.php" method="POST" enctype="multipart/form-data">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Coin</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td>
                                <p><?= $data['nameCoin'] ?></p>
                            </td>

                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <p><?= $data['ketCoin'] ?></p>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <p>Picture:<img src="../imageKoin/<?= $data['uploadKoin'] ?>" alt="" style="width: 200px"></p>
                <a href="commentAboutBTC.php?>id=<?= $data['id']?>" class="btn btn-primary mt-5">Comment About this Coin</a>






        </div>
    <?php

    }
    ?>

<?php include ("footer.php");?>
</body>

</html>
<?php include("Controller.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cryptomendations</title>
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

        .blockquote {
            text-shadow: 10px;
            font-style: italic;
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

                    <a class="nav-link text-warning" href="koinPage.php">Coin List</a>
                    <a class="nav-link" href="newRecomPage.php">New post</a>
                    
                    <a class="nav-link" href="CalculatorHP.php">Calculator</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Logo,jumbotron -->
    <div class="grey p-5 rounded-lg naik">
        <div class="container text-center">
            <img src="../img/logo.png" width="30%" alt="" class="rounded-circle">
            <h1 class="display-5">What coin would you like to know?</h1>
            <p class="lead">Knowing a coin and the project in it is one way to win in the market</p>
            <hr class="my-4">
            <p>Don't be greedy,Money management is the key</p>
            <a class="btn btn-white btn-primary btn-lg border border-warning" href="createPage.php" role="button">I HAVE AN IDEA</a>
        </div>

    </div>

    <div class="container mt-2 justify-content-center">
        <figure class="text-center">
            <blockquote class="blockquote fontKdam">
                <p>"be brave when others are fearful, be fearful when others are greedy"</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Warren Buffett
            </figcaption>
        </figure>
    </div>


    <!-- About -->
    <section id="about" class="about">




        <div class="container">
            <div class="row my-3">
                <div class="col text-center">
                    <h2>2 types of people in Crypto Market</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 text-center border border-primary">
                    <h3>Investors
                    </h3>
                    <br>
                    <div>
                        <h5>HODL</h5>
                    </div>
                </div>
                <div class="col-md-5 text-center border border-danger">
                    <h3>Traders
                    </h3>
                    <br>
                    <div>
                        <h5>Momento</h5>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio bg-light pb-4">
        <div class="container">
            <div class="row py-3">
                <div class="col text-center">
                    <h3>Portfolio</h3>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center">


                <?php
                    
                    $result = readKoin();
                    foreach ($result as $barisdata) {
                ?>
                        <div class="col-sm-4 card justify-content-center m-2" style="width: 18rem;">
                            <img src="../imageKoin/<?= $barisdata['uploadKoin'] ?>" class="card-img-top" style="width: 100%" alt="Logo coin">
                            <div class="card-body">
                                <h5 class="card-title"><?= $barisdata["nameCoin"] ?></h5>
                                <p class="card-text"><?= $barisdata["ketCoin"] ?></p>
                                <a href="koinDetailPage.php?update_id=<?= $barisdata["id"] ?>" class="btn btn-primary">Detail</a>
                                
                            </div>
                        </div>


                <?php
                    }
                
                ?>
            </div>
        </div>
    </section>

    <?php include ("footer.php");?>
</body>

</html>
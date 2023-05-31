<?php
include ("cal.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Calculator</title>
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
<nav class="navbar navbar-expand-lg navbar-dark grey fixed-top me-3">
        <div class="container">
            <a class="navbar-brand fontKdam" href="homePage.php">Cryptomendations</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="koinPage.php">Coin List</a>
                    <a class="nav-link" href="newRecomPage.php">New post</a>
                    
                    <a class="nav-link  text-warning" href="CalculatorHP.php">Calculator</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <div class="row bg-light py-5">
            <div class="col text-center">
                <h1>Kalkulator</h1>
            </div>

        </div>

        <div class="row justify-content-center">



            <form action="#" method="post">
                <div class="col-lg-12 mt-4 ">

                    <div class="border border-success">
                        <div class="row-sm-2 text-center">
                            <input type="text" name="display" value=<?php echo $num; ?>>
                        </div>

                        <div class="row-sm-2 text-center">
                            <button class="col-sm-1 btn btn-danger mx-1 my-1" type="submit" name="clear" value="">C</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="IdkHow">M+</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="">M-</button>
                            <button class="col-sm-1 btn btn-warning mx-1 my-1" type="submit" name="operator" value="/">/</button>
                        </div>
                        <div class="row-sm-2 text-center">
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="7">7</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="8">8</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="9">9</button>
                            <button class="col-sm-1 btn btn-warning mx-1 my-1" type="submit" name="operator" value="x">X</button>
                        </div>
                        <div class="row-sm-2 text-center">
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="4">4</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="5">5</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="6">6</button>
                            <button class="col-sm-1 btn btn-warning mx-1 my-1" type="submit" name="operator" value="-">-</button>
                        </div>
                        <div class="row-sm-2 text-center">
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="1">1</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="2">2</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="3">3</button>
                            <button class="col-sm-1 btn btn-warning mx-1 my-1" type="submit" name="operator" value="+">+</button>
                        </div>
                        <div class="row-sm-2 text-center">
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="+">+/-</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="0">0</button>
                            <button class="col-sm-1 btn btn-secondary mx-1 my-1" type="submit" name="submit" value="00">00</button>
                            <button class="col-sm-1 btn btn-warning mx-1 my-1" type="submit" name="equals" value="=">=</button>
                        </div>

                    </div>
                </div>

            </form>


        </div>




    </div>
</body>

</html>
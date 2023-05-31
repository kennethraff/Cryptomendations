<?php include("importCDN.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>


    <!-- CSS-->
    <style>
        .fontKdam {
            font-family: 'Kdam Thmor Pro', sans-serif;
        }

        .navbar {
            position: relative;
            z-index: 1;
        }

        .navbar-brand {
            font-family: 'Kdam Thmor Pro', sans-serif;
            font-size: 32px;
        }

        /* Jumbotron*/

        .jumbotron {
            background-image: url(../img/111.jpg);
            background-size: cover;
            text-align: center;
            height: 620px;
            width: 100%;
            position: relative;


        }

        .jumbotron .container {
            position: relative;
            z-index: 1;
        }

        .jumbotron::after {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
            position: absolute;
            bottom: 0;
            margin-left: -48px;
        }

        .jumbotron .display-4 {
            color: white;

            margin-top: 150px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
            font-size: 30px;
            text-align: center;
        }

        .jumbotron .display-4 span {
            font-weight: 500;
        }

        /* Panel*/
        .panel {

            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            margin-top: -90px;
            background-color: white;
            position: relative;
            z-index: 1;
            padding: 30px;
            margin-bottom: 80px;



        }

        .panel img {
            width: 80px;
            height: 80px;
            margin-right: 20px;

            float: left;
        }

        .panel h4 {
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
            margin-top: 5px;
        }

        .panel p {
            font-size: 14px;
            color: #ACACAC;
        }

        .welcome h3 {
            font-size: 52px;
            font-weight: 200;
            text-transform: uppercase;
        }

        .welcome h3 span {
            font-weight: bold;
        }

        .welcome p {
            font-size: 18px;
            color: #ACACAC;
            margin: 25px 0;
        }

        .welcome {
            text-align: center;
        }

        .ukGambar {
            width: 500px;
            padding: 10px;

        }

        /* Live harga coin */


        /* Live harga coin */

        .hargaCoin {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

        .hargaCoin .coin-price {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 3px #ccc;
            margin: 7px;
        }

        .hargaCoin .coin-price .logo {
            width: 70px;
            margin-right: 10px;
        }

        .hargaCoin .coin-price .logo img {
            width: 100%;
        }

        .hargaCoin .coin-price div {
            display: block;
        }

        .hargaCoin .coin-price div h1 {
            font-size: 20px;
        }

        .welcome h3 {
            font-size: 40px;
            font-weight: 100;
            text-transform: uppercase;
        }

        .welcome h3 span {
            font-weight: bold;
        }






        /* Versi dekstop*/

        @media (min-width: 992px) {

            .jumbotron .display-4 {
                color: white;

                margin-top: 150px;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
                font-size: 40px;
                text-align: center;
            }

            .welcome h3 {
                font-size: 52px;
                font-weight: 200;
                text-transform: uppercase;
            }

            .welcome h3 span {
                font-weight: bold;
            }

            .nav-link {
                text-transform: uppercase;
                margin-right: 30px;
            }

            .nav-link:hover::after {
                content: '';

                display: block;
                border-bottom: 3px dotted orange;
                width: 50%;
                margin: auto;
                padding-bottom: 5px;
                margin-bottom: -8px;

            }

            .jumbotron {
                height: 720px;
                margin-top: -75px;

            }

            .navbar-brand,
            .nav-link {
                color: white;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            }

            .jumbotron .display-4 {
                font-size: 62px;
            }

            .welcome {
                text-align: left;
            }

            .ukGambar {
                width: 600px;
                height: 400px;

            }

            /* Live harga coin */

            .hargaCoin {
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
                margin-top: -50px;
                margin-bottom: 20px;
            }

            .hargaCoin .coin-price {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px 20px;
                border-radius: 5px;
                box-shadow: 0 0 3px #ccc;
                margin: 7px;
            }

            .hargaCoin .coin-price .logo {
                width: 70px;
                margin-right: 10px;
            }

            .hargaCoin .coin-price .logo img {
                width: 100%;
            }

            .hargaCoin .coin-price div {
                display: block;
            }

            .hargaCoin .coin-price div h1 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body id="top">

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="homePage.php">Cryptomendations</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <!--<a class="nav-item nav-link active" aria-current="page" href="#">Cryptomendations</a>-->

                    <a class="nav-item nav-link" href="koinPage.php">Coin List</a>
                    <a class="nav-item nav-link" href="newRecomPage.php">New post</a>
                    <a class="nav-item nav-link" href="userPage.php">Userpage</a>
                    <a class="nav-item nav-link" href="CalculatorHP.php">Calculator</a>
                    <a class="btn btn-warning" href="loginAdminPage.php" role="button">Admin</a>


                </div>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar-->


    <!-- Jumbotron-->


    <div class="jumbotron bg-light p-5 rounded-lg">
        <div class="container">
            <h1 class="display-4"><span>Crypto</span>Mendations <br> for your <span>better</span> plans</h1>
            <hr class="my-4">
            <a class="btn btn-warning btn-lg mx-2 my-2" href="mailto:cryptomendations@gmail.com" role="button">Reach us</a>
            <a class="btn border-warning text-white btn-lg mx-2 my-2" href="https://t.me/+Lhrgz_kn04dkNjFl" role="button">Join Community</a>
        </div>
    </div>


    <!--Akhir Jumbotron-->

    <!-- Container-->
    <div class="container">
        <!-- Panel-->
        <div class="row justify-content-center">
            <div class="col-10 panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="../img/employee.png" alt="..." class="float-left">
                        <h4>24 Hours</h4>
                        <p>Customer Service ready to help you</p>
                    </div>
                    <div class="col-lg">
                        <img src="../img/hires.png" alt="..." class="float-left">
                        <h4>Easy</h4>
                        <p>Upload your recommendation with picture</p>
                    </div>
                    <div class="col-lg">
                        <img src="../img/security.png" alt="..." class="float-left">
                        <h4>Privacy</h4>
                        <p>No need account to create recommendation</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Panel-->
        <!-- Live price -->

        <article class="card fontKdam">
            <marquee>
                <h1 style="color:black;">Live Price update 24/7 Cryptocurrency</h1>
            </marquee>
        </article>
        <div class="container border border-warning">
            <div class="row text-center" style="margin-bottom: 50px; margin-top:-50px;">
                <div class="col fontKdam">
                    <h1>.</h1>
                </div>

            </div>



            <div class="row hargaCoin">
                <div class="col coin-price">
                    <div class="logo"><img src="../img/bitcoin.logo.png "></div>
                    <div>
                        <h1 style="color: orange;">$<span id="bitcoin"></span></h1>
                        <h1 class="fontKdam">Bitcoin</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/eth.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="ethereum"></span></h1>
                        <h1 class="fontKdam">Ethereum</h1>
                    </div>
                </div>

                <div class="col coin-price">
                    <div class="logo"><img src="../img/bnb.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="binancecoin"></span></h1>
                        <h1 class="fontKdam">Binance</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/ada.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="cardano"></span></h1>
                        <h1 class="fontKdam">Cardano</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/xrp.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="ripple"></span></h1>
                        <h1 class="fontKdam">Ripple</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/sol.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="solana"></span></h1>
                        <h1 class="fontKdam">Solana</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/doge.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="dogecoin"></span></h1>
                        <h1 class="fontKdam">Doge</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/dot.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="polkadot"></span></h1>
                        <h1 class="fontKdam">Polkadot</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/atom.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="cosmos"></span></h1>
                        <h1 class="fontKdam">Cosmos</h1>
                    </div>
                </div>

                <div class="col coin-price">
                    <div class="logo"><img src="../img/tron.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="tron"></span></h1>
                        <h1 class="fontKdam">Tron</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/algo.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="algorand"></span></h1>
                        <h1 class="fontKdam">Algorand</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/ltc.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="litecoin"></span></h1>
                        <h1 class="fontKdam">Litecoin</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/link.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="chainlink"></span></h1>
                        <h1 class="fontKdam">Chainlink</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/uniswap.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="uniswap"></span></h1>
                        <h1 class="fontKdam">Uniswap</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/xlm.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="stellar"></span></h1>
                        <h1 class="fontKdam">Stellar</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/vet.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="vechain"></span></h1>
                        <h1 class="fontKdam">Vechain</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/ftm.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="fantom"></span></h1>
                        <h1 class="fontKdam">Fantom</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/one.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="harmony"></span></h1>
                        <h1 class="fontKdam">Harmony</h1>
                    </div>
                </div>
                <div class="col coin-price">
                    <div class="logo"><img src="../img/aave.logo.png"></div>
                    <div>
                        <h1 style="color: orange;">$<span id="aave"></span></h1>
                        <h1 class="fontKdam">AAVE</h1>
                    </div>
                </div>

            </div>


        </div>



        <!-- Akhir Live price -->

        <!--Welcome-->
        <div class="row welcome mb-3">
            <div class="col-sm">
                <img src="../img/pic1.jpg" alt="" class="img-fluid rounded ukGambar justify-content-center rounded">
            </div>
            <div class="col">
                <h3>What is <span>Cryptocurrency</span>, Whats cool?</h3>
                <div class="container mt-2 justify-content-center">
                    <p>Digital or virtual currency that is secured by cryptography, which makes it nearly impossible to counterfeit or double-spend. Many cryptocurrencies are decentralized networks based on blockchain technology—a distributed ledger enforced by a disparate network of computers.</p>
                </div>

                <!-- <a href="" class="btn btn-primary">KLIK</a> -->
            </div>
            <figure class="text-center">
                <blockquote class="blockquote fontKdam fst-italic">
                    <h5>"Like the Internet, Bitcoin will change the way people interact and do business around the world"</h5>
                </blockquote>
                <figcaption class="blockquote-footer fst-italic">
                    Erik Voorhees
                </figcaption>
            </figure>
        </div>
        <!--Akhir welcome-->
        <div class="row text-center">
            <div class="col ukLogo">
                <img src="../img/eth.logo.png" alt="" style="width: 200px;">
            </div>
            <div class="col">
                <img src="../img/bitcoin.logo.png" alt="" style="width: 300px;">
            </div>
            <div class="col">
                <img src="../img/bnb.logo.png" alt="" style="width: 200px;">
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <!-- Akhir Container-->



    <script>
        var btc = document.getElementById("bitcoin");
        var eth = document.getElementById("ethereum");
        var bnb = document.getElementById("binancecoin");
        var ada = document.getElementById("cardano");
        var xrp = document.getElementById("ripple");
        var sol = document.getElementById("solana");
        var doge = document.getElementById("dogecoin");
        var dot = document.getElementById("polkadot");
        var atom = document.getElementById("cosmos");
        var trx = document.getElementById("tron");
        var algo = document.getElementById("algorand");
        var ltc = document.getElementById("litecoin");
        var link = document.getElementById("chainlink");
        var uni = document.getElementById("uniswap");
        var xlm = document.getElementById("stellar");
        var vet = document.getElementById("vechain");
        var ftm = document.getElementById("fantom");
        var one = document.getElementById("harmony");
        var aave = document.getElementById("aave");

        var liveprice = {
            "async": true,
            "scroosDomain": true,
            "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Ctether%2Cusd-coin%2Cbinancecoin%2Ccardano%2Cripple%2Cbinance-usd%2Csolana%2Cdogecoin%2Cpolkadot%2Ccosmos%2Ctron%2Calgorand%2Clitecoin%2Cchainlink%2Cuniswap%2Cstellar%2Cvechain%2Cfantom%2Charmony%2Cpancakeswap%2Caave&vs_currencies=usd",

            "method": "GET",
            "headers": {}
        }

        $.ajax(liveprice).done(function(response) {
            btc.innerHTML = response.bitcoin.usd;
            eth.innerHTML = response.ethereum.usd;
            bnb.innerHTML = response.binancecoin.usd;
            ada.innerHTML = response.cardano.usd;
            xrp.innerHTML = response.ripple.usd;
            sol.innerHTML = response.solana.usd;
            doge.innerHTML = response.dogecoin.usd;
            dot.innerHTML = response.polkadot.usd;
            atom.innerHTML = response.cosmos.usd;
            trx.innerHTML = response.tron.usd;
            algo.innerHTML = response.algorand.usd;
            ltc.innerHTML = response.litecoin.usd;
            link.innerHTML = response.chainlink.usd;
            uni.innerHTML = response.uniswap.usd;
            xlm.innerHTML = response.stellar.usd;
            vet.innerHTML = response.vechain.usd;
            ftm.innerHTML = response.fantom.usd;
            one.innerHTML = response.harmony.usd;
            aave.innerHTML = response.aave.usd;

        });
    </script>
</body>

</html>
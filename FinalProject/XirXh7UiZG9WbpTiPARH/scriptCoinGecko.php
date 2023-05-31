<script>
        var btc = document.getElementById("bitcoin");
        var eth = document.getElementById("ethereum");
        var bnb = document.getElementById("binancecoin");
        var ada = document.getElementById("cardano");
        var xrp = document.getElementById("ripple");
        var sol = document.getElementById("solana");
        var doge = document.getElementById("dogecoin");


        var liveprice = {
            "async": true,
            "scroosDomain": true,
            "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Ctether%2Cusd-coin%2Cbinancecoin%2Cdogecoin%2Ccardano%2Cripple%2Cbinance-usd%2Csolana&vs_currencies=usd",

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

        });
    </script>
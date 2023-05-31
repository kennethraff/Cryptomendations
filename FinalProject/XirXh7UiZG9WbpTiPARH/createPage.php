<?php include("Controller.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <?php include ("importCDN.php");?>
    <title>Create Page</title>
</head>

<body>


    <div class="row bg-light py-4">
        <div class="col text-center">
            <h1>Create new</h1>
        </div>

    </div>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <p>1. Name:</p>
        <input type="text" name="Nama">
        <br>
        <p>2. Email:</p>
        <input type="text" name="Email">
        <br>
        <p>3. Country:</p>
        <input type="text" name="Negara">
        <br>
        <p>4. Coin:</p>
        
        <select class="form-select" aria-label="Default select example" name="id_coin">
            <option selected>Select Coin you recommend</option>
            <option value="BTC">BTC</option>
            <option value="ETH">ETH</option>
            <option value="BNB">BNB</option>
            <option value="ADA">ADA</option>
            <option value="XRP">XRP</option>
            <option value="SOL">SOL</option>
            <option value="DOGE">DOGE</option>
            <option value="DOT">DOT</option>
            <option value="TRX">TRX</option>
            <option value="AVAX">AVAX</option>
        </select>
        <br>
        <p>5. Direction:</p>
        <select class="form-select" aria-label="Default select example" name="arah">
            <option selected>Which direction</option>
            <option value="UP">UP</option>
            <option value="DOWN">DOWN</option>
            <option value="Not sure">Not sure</option>
        </select>
        <br>
        <p>6. Argument:</p>
        <input type="text" name="argumen">
        <br>
        <p>7. Upload image:</p>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="upload_gambar">
        </div>
        <br>

        <p>8. Target Date:</p>
        <input type="datetime-local" name="tanggal_target">
        <br>



        

        <input type="submit" class="btn btn-primary" value="Add new review">


    </form>
    <?php include ("footer.php");?>
</body>

</html>
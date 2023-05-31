<?php
 include("dbConnect.php");

function readKoin()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM `listkoin`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan data dari database ke dalam array
                $data['id'] = $row["id"];
                $data['nameCoin'] = $row["namaKoin"];
                $data['ketCoin'] = $row["keteranganKoin"];
                $data['uploadKoin'] = $row["gambarKoin"];
                
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

function createKoin($namaKoin, $keteranganKoin, $gambarKoin)
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {

        $sql_query = "INSERT INTO `listkoin` (`namaKoin`, `keteranganKoin`, `gambarKoin`) 
        VALUES ('$namaKoin' ,'$keteranganKoin', '$gambarKoin')";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

function getcoindatawithid($id)
{
    $data = array();
    if ($id > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `listkoin` WHERE ID = $id";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan data dari database ke dalam array
                $data['id'] = $row["id"];
                $data['nameCoin'] = $row["namaKoin"];
                $data['ketCoin'] = $row["keteranganKoin"];
                $data['uploadKoin'] = $row["gambarKoin"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

function updatecoindata($id, $name, $ketCoin, $uploadKoin)
{
    if ($id != "" && $name != "" && $ketCoin != "" && $uploadKoin != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `userdata` 
                SET `namaKoin` = '$name', 
                `keteranganKoin` = '$ketCoin', 
                `gambarKoin` = '$uploadKoin' ,
                WHERE `listcoin`.`ID` = $id;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
    return "Gagal update";
}
function deletecoindata($id)
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "DELETE FROM `listkoin` WHERE ID = '{$conn->real_escape_string($id)}'";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

?>
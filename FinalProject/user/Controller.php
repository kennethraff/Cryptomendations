<?php

include("../dbConnect.php");

//function untuk read database data

function readuserdata()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM `userdata`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan data dari database ke dalam array
                $data['id'] = $row["ID"];
                $data['name'] = $row["Nama"];
                $data['email'] = $row["Email"];
                $data['country'] = $row["Negara"];
                $data['heading'] = $row["arah"];
                $data['argue'] = $row["argumen"];
                $data['uploadPic'] = $row["upload_gambar"];
                $data['dateWrite'] = $row["tanggal_tulis"];
                $data['dateTarget'] = $row["tanggal_target"];
                $data['coinType'] = $row["id_coin"];
                array_push($allData, $data);
            }
        }
    }
    return $allData;
    my_closeDB($conn);
}
function deleteuserdata($id)
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "DELETE FROM `userdata` WHERE ID = '{$conn->real_escape_string($id)}'";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}
function createuserdata($Nama, $Email, $Negara, $arah, $argumen, $upload_gambar, $tanggal_target,$id_coin)
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {

        $sql_query = "INSERT INTO `userdata` (`Nama`, `Email`, `Negara`, `arah`, `argumen`, `upload_gambar`,`tanggal_tulis` , `tanggal_target`,`id_coin`) 
        VALUES ('$Nama' ,'$Email', '$Negara', '$arah', '$argumen', '$upload_gambar', current_timestamp(), '$tanggal_target','$id_coin')";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

function getuserdatawithid($id)
{
    $data = array();
    if ($id > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `userdata` WHERE ID = $id";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan data dari database ke dalam array
                $data['id'] = $row["ID"];
                $data['name'] = $row["Nama"];
                $data['email'] = $row["Email"];
                $data['country'] = $row["Negara"];
                $data['heading'] = $row["arah"];
                $data['argue'] = $row["argumen"];
                $data['uploadPic'] = $row["upload_gambar"];
                $data['dateWrite'] = $row["tanggal_tulis"];
                $data['dateTarget'] = $row["tanggal_target"];
                $data['coinType'] = $row["id_coin"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

function updateuserdata($id, $name, $email, $country, $heading, $argue, $uploadpic, $writeDate, $targetDate)
{
    if ($id != "" && $name != "" && $email != "" && $country != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `userdata` 
                SET `Nama` = '$name', 
                `Email` = '$email', 
                `Negara` = '$country' ,
                `arah` = '$heading', 
                `argumen` = '$argue',
                 `upload_gambar` = '$uploadpic', 
                 `tanggal_tulis` = '$writeDate', 
                 `tanggal_target` = '$targetDate'
                WHERE `userdata`.`ID` = $id;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
    return "Gagal update";
}

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
        $sql_query = "SELECT * FROM `listkoin` WHERE id = $id";
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
        $sql_query = "UPDATE `listkoin` 
                SET `namaKoin` = '$name', 
                `keteranganKoin` = '$ketCoin', 
                `gambarKoin` = '$uploadKoin'
                WHERE `listkoin`.`id` = $id;";
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

function readleveluserdata()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM `leveluser`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan data dari database ke dalam array
                $data['id'] = $row["id"];
                $data['usern'] = $row["username"];
                $data['pass'] = $row["password"];
                $data['level'] = $row["role"];
               
                array_push($allData, $data);
            }
        }
    }
    return $allData;
    my_closeDB($conn);
}

function createleveluserdata($username, $password, $role)
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {

        $sql_query = "INSERT INTO `leveluser` (`username`, `password`, `role`) 
        VALUES ('$username' ,'$password', '$role')";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

function getleveluserdatawithid($id)
{
    $data = array();
    if ($id > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM `leveluser` WHERE id = $id";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //simpan data dari database ke dalam array
                $data['id'] = $row["id"];
                $data['usern'] = $row["username"];
                $data['pass'] = $row["password"];
                $data['level'] = $row["role"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}
function updateleveluserdata($id, $username, $password, $role)
{
    if ($id != "" && $username != "" && $password != "" && $role != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `leveluser` 
                SET `username` = '$username', 
                `password` = '$password', 
                `role` = '$role'
                WHERE `leveluser`.`id` = $id;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
        return $result;
    }
    return "Gagal update";
}

function deleteleveluserdata($id)
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "DELETE FROM `leveluser` WHERE ID = '{$conn->real_escape_string($id)}'";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
    my_closeDB($conn);
}

//login
if (isset($_POST['pencetlogin'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $conn = my_connectDB();
    $cekuser = mysqli_query($conn, "SELECT * FROM leveluser WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if ($hitung > 0) {
        //kalau ada data
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];
        if ($role == 'admin') {
            //kalau admin
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'Admin';
            header('location:../XirXh7UiZG9WbpTiPARH/');
        } else {
            //kalau bukan admin
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'User';
            header('location:user');
        }
    } else {
        //kalau gaada data
        echo "Admin data not found, If you want to create new admin you must login as admin first";
        
    }
    my_closeDB($conn);
};

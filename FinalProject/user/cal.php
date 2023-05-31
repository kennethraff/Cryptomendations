<?php
$num = "";
$result = "";
$angka1 = "num";
$cookie_value1 = "";
$opera = "operator";
$cookie_value2 = "";


if (isset($_POST['display'])) {
    $num = $_POST['display'];
} else {
    $num = "";
}
if (isset($_POST['submit'])) {
    $num = $_POST['display'] . $_POST['submit'];
} else {
    $num = "";
}
if (isset($_POST['operator'])) {
    $cookie_value1 = $_POST['display'];
    setcookie($angka1, $cookie_value1, time() + (86400 * 30), "/"); ##https://www.w3schools.com/php/func_network_setcookie.asp
    $cookie_value2 = $_POST['operator'];
    setcookie($opera, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}

if (isset($_POST['equals'])) {
    $num = $_POST['display'];
    switch($_COOKIE['operator']){
        case "+":
          $result = $_COOKIE['num'] + $num;
          break;
        case "/":
          $result = $_COOKIE['num'] / $num;
          break;
        case "-":
          $result = $_COOKIE['num'] - $num;
          break;
        case "x":
          $result = $_COOKIE['num'] * $num;
          break;
       }
    $num = $result;
    if (isset($_POST['clear'])) {
        $num="";
    }
}
?>
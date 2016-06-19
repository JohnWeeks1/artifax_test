<?php


$connection = mysqli_connect('localhost','root','','artifax_test');

if(!$connection) {
    echo "<h1>NOT COOL</h1>";
}
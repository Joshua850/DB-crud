<?php



$con = new mysqli('localhost', 'joshua2', 'password', 'users');

if (!$con) {
    die(mysqli_error($con));
}

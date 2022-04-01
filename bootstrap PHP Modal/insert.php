<?php
include 'connect.php';
extract($_POST);

if (
    isset($_POST['nameSend'])
    && isset($_POST['surNameSend'])
    && isset($_POST['emailSend'])
    && isset($_POST['mobileSend'])
    && isset($_POST['titleSend'])
) {

    $sql = "INSERT INTO users(title,firstname,surname,mobile,email) values('$titleSend','$nameSend','$surNameSend','$mobileSend', '$emailSend')";
    $result = mysqli_query($con, $sql);
}

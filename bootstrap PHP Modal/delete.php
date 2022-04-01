<?php
include 'connect.php';

if (isset($_POST['deletesend'])) {

    $unique = $_POST['deletesend'];

    //$sql = "delete from users where id=$unique";

    $sql = "DELETE FROM users WHERE id=$unique";
    $result = mysqli_query($con, $sql);
}

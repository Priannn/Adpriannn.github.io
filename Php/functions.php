<?php
require 'connect.php';

function send ($data){
    global $conn;

    $email = $data["email"];
    $pesan = $data["pesan"];

    $query = "INSERT INTO contac_data VALUES ('','$email','$pesan')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>
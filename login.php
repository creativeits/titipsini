<?php
require 'connect.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM users 
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.html");
} else {
    echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <button><strong><a href='login.html'>Login</a></strong></button></center>";
}

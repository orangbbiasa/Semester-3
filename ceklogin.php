<?php
    error_reporting(E_ALL);

    include "koneksi.php"; // Ganti "=" dengan "include"

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("SELECT * FROM user_table WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 0){
        echo '<script language="javascript">
        alert("Username dan Password Salah! Silahkan Login Kembali."); document.location="login.php";</script>';
    }else{
        echo '<script language="javascript">
        alert("Anda Berhasil Login."); document.location="Rifal.php";</script>';
    }

    $stmt->close();
    $mysqli->close();
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "web_politani");

function query($query) {
global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

    function create($data){
        global $conn;
    
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $message = htmlspecialchars($data["message"]);
    
        $query = "INSERT INTO buku_tamu VALUES(NULL,'$nama','$email','$message')";
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }
    
?>
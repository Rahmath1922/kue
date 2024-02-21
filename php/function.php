<?php
//KONEKSI
$conn = mysqli_connect("localhost", "root", "", "ballsingkong");
if (!$conn) {
    die("Koneksi kedatabase ballsingkong gagal: " . mysqli_connect_error());
}


function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $masukan = htmlspecialchars($data["masukan"]);

    // insert tambah
    $query = "INSERT INTO masukan
           VALUES
           ('', '$nama', '$email', '$masukan')
           ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


?>
<?php

include ("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['name'];
    $hp = $_POST['phone'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    // Update data ke database
    $query = $conn->prepare("INSERT INTO tb_contact VALUES ('', '$nama', '$hp', '$email', '$question')");


    if ($query->execute()) {
        echo "<script>alert('Data berhasil ditambah!'); window.location.href='../contact.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah data!');</script>";
    }
}

?>
<?php

include("connection.php");

if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO daftar ( id ,nisn, nama, alamat, asal_sekolah) 
    VALUE ('$id','$nisn', '$nama', '$alamat', '$asal_sekolah')";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
    
        header('Location: form_pendaftaran.php?status=sukses');
    } else {
        header('Location: form_pendaftaran.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
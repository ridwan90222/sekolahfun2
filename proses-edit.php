
<?php

include("connection.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $asal_sekolah = $_POST['asal_sekolah'];

    
    $sql = "UPDATE daftar SET id='$id',nisn='$nisn',nama='$nama',alamat='$alamat', asal_sekolah='$asal_sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
          header('Location: member_page.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
?>

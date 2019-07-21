<?php

include("connection.php");


if( !isset($_GET['id']) ){
    header('Location: member_page.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM daftar WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>EDIT PENDAFTARAN</title>
    
    <style>
        body{
            background-color: pink;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
            <label for="nisn">NISN: </label>
            <input type="text" name="nisn" placeholder="masukkan nisn anda" 
            value="<?php echo $siswa['nisn'] ?>" />
            </p>
            <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="masukkan nama anda" 
            value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
            <label for="alamat"> Alamat: </label>
            <input  required type="text" name="alamat" placeholder="masukkan alamat"
                         value="<?php echo $siswa['alamat'] ?>"/>
            </p>
            <p>
            <label for="asal_sekolah">Asal Sekolah: </label>
            <input type="text" name="asal_sekolah" placeholder="masukkan asal_sekolah anda" 
            value="<?php echo $siswa['nisn'] ?>" />
            </p>
            <p>
            <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa</title>

    <style>
        body{
            background-color: pink;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
            <p>
            <label for="id">id </label>
            <input type="number" name="id" placeholder="masukkan angka 1-5" min="1" max="5" required />
        </p>
        <p>
            <label for="nisn">NISN: </label>
            <input type="text" name="nisn" placeholder="nisn" required />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" required />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" placeholder="alamat" required />
        </p>
        <p>
            <label for="asal_sekolah">Asal Sekolah: </label>
            <input type="text" name="asal_sekolah" placeholder="asal_sekolah" required />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        <p><a href="member_page.php" target="_blank"> kembali </a></p>

        </fieldset>

    </form>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>



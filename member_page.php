<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Online</title>

<style>
    body{
        background-color: pink;
    }

    a{
        color: red;
    }
    table{
        width: 100px;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
    }

    th{
        height: 50px;
    }

    td{
        width: 180px;
        height: 50px;
    }


button{
    width: 200px;
    height: 40px;
}
</style>
</head>

<body>
    <header>
        <h3 style="text-align: center;">List Siswa Yang Sudah Terdaftar</h3>
    </header>

    <div style="text-align: center;">
        <marquee><p style="font-size: 30px; font-family: sans-serif;"> mendaftar klik <a href="form_pendaftaran.php">disini</a></p></marquee>
    </div>

    <br>

    <table border="3">
    <thead>
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>ASAL SEKOLAH</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM daftar";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nisn']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['asal_sekolah']."</td>";

            echo "<td>";
            echo "<a href='ubah.php?id=".$siswa['id']."'>Ubah</a>  ";
            echo "</td>";
            echo "<td>";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
<div style="text-align: center;">
    <button style="background-color: cyan; color: red; width: 150px height: 30px;" onclick="window.location.href = 'index.php';">kembali ke awal</button>
</div>
    </body>
</html>
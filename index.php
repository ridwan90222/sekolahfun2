<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Online</title>
    <style>
        body{
            background-color: pink;
        }
        .nav-style{
            color: white;
            font-size: 18px

        }
        p{
            color: white;
        }
        button{
            display: block;
            margin-top:  25px;
            margin-bottom: 10px;
            width: 140px;
            height: 30px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav class="nav-style">
        <header style="color: white !important;"> MENU</header>
        <ul>
            <li> login dan daftar</li>
            <button onclick="window.location.href = 'member_page.php';">Daftar</button>
            <button onclick="window.location.href = 'form-daftar.php';">Masuk</button>
        </ul>
    </nav>
    </body>
</html>
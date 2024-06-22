<?php

include "../php/register.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Giriş Yap</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        a:hover {
            color: #333;
            text-decoration: underline;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            text-align: left;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .yan {
            display: flex;
            flex-direction: row;

        }

        .ad {
            width: 40%;
            display: flex;
            flex-direction: column;
        }

        .soyad {
            width: 40%;
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Hesap Oluştur</h2>

    <form method="POST" action="../php/register.php">
        <label for="username">Kullanıcı Adı:</label>
        <input type="text" id="username" name="username"/>

        <label for="eposta">E-Posta Adresi:</label>
        <input type="text" id="eposta" name="eposta"/>

        <div class="yan">
            <div class="ad">
                <label for="ad">Ad:</label>
                <input type="text" id="ad" name="ad"/>
            </div>


            <div class="soyad">
                <label for="ad">Soyad:</label>
                <input type="text" id="soyad" name="soyad"/>
            </div>
        </div>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required/>

        <button type="submit" name="kaydet">Hesap Oluştur</button>

        <p style="text-align: left">
            <a href="Girisyap.php" target="">Hesabın varsa buradan giriş yap.</a>
        </p>
        <p style="text-align: left">
            <a href="../index.php">Hesap Açmadan Devam Et.</a>
        </p>
    </form>
</div>
</body>
</html>

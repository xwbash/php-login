<html>
<head>
<title> Giriş Sayfası </title>
</head>

<body>

<?php
    $baglanti = mysqli_connect("localhost","root","","ogrenci_kayit");
    if(!($baglanti))
    {
        echo("Baglanti Sorunu");
    }  
    else
    {
        echo("Bağlanıldı");
    }  
?>

<form action="" method="post">
    <center>
    <br> <h1> Kayıt Yap </h1> <br>
    Email Adı Giriniz:
    <input type="text" name="email">
    <br>
    <br>
    Şifreyi Giriniz:
    <input type="password" name="sifre">
    </br>
    </br>
    <button type="submit" name="kaydet"> Kayıt Ol </button>
    </center>
</form>

<?php
    if(isset($_POST["kaydet"]))
    {
        $sql = "insert into ogrenciler(email,sifre) values('".$_POST["email"]."','".$_POST["sifre"]."')";
        $sonuc = mysqli_query($baglanti,$sql);
    }
?>



</body>
</html>
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
    <br> <h1> Giriş Yap </h1> <br>
    Email Adı Giriniz:
    <input type="text" name="email">
    <br>
    <br>
    Şifreyi Giriniz:
    <input type="password" name="sifre">
    </br>
    </br>
    <button type="submit" name="kaydet"> Giriş Yap </button>
    </center>
</form>

<?php
    if(isset($_POST["kaydet"]))
    {
        $sql = "SELECT email,sifre from ogrenciler where email='".$_POST["email"]."' AND sifre='".$_POST["sifre"]."'";
        $sonuc = mysqli_query($baglanti,$sql);
        $dizi = mysqli_fetch_array($sonuc);
        
        if($dizi)
        {
            echo("giriş yapıldı");
        }
        else
        {
            echo("hatalı giriş");
        }
    }
?>



</body>
</html>
<?php
 if (isset($_POST['Simpan'])) {
    $Nama   =   $_POST['Nama'];  
    $Alamat =   $_POST['Alamat'];
    $jenisKelamin = $_POST['JenisKelamin'];
    $Agama = $_POST['Agama'];
    $Email = $_POST['Email'];
    $pass   =   $_POST['password']; 

    if ($Email == "Santia27@gmail.com" && $pass == "juli") { 
        echo   "<h2>Selamat Akun Anda Aktif:)</h2>";
        echo $Nama."<br>";
        echo $Alamat."<br>";
        echo $jenisKelamin."<br>";
        echo $Agama."<br>"; 
    } else { 
        echo   "<h2>Login Gagal,Silakan Coba Lagi:(</h2>";
        echo $Nama."<br>";
        echo $Alamat."<br>";
        echo $jenisKelamin."<br>";
        echo $Agama."<br>";

    }
}
 ?>
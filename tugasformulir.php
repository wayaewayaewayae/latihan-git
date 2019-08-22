<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formulir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<FORM ACTION="prosfor.php" METHOD="POST" NAME="input"> 
    <h2>Registrasi</h2>  
    No PENDAFTARAN   : <br><input type="nomber" name="NOPENDATARAN"><br>
    NISN : <br><input type="nomber" name="NISN"><br>
    NAMA : <br><input type="text" name="NAMA"><br>
    AGAMA :<br><select name="AGAMA"><br>
           <option value="LAKI-LAKI">L</option> 
           <option   value="PEREMPUAN">P</option>

    ALAMAT : <br><input type="textarea" name="ALAMAT"><br>
    TEMPAT LAHIR : <br><input type="checkdate" name="TEMPATLAHIR"><br>
    TANGGAL LAHIR : <br><input type="date" name="TANGGALLAHIR"><br>
    ASAL SEKOLAH : <br><input type="text" name="ASALSEKOLAH"><br>

    JENIS KELAMIN : <br><input type="radio button" name="JENISKELAMIN"><br>
           <input type="radio" name="JENISKELAMIN" value="TI" checked>
           LAKI-LAKI<br>
           <input type="radio" name="JENISKELAMIN" value="SI"> Sistem
           PEREMPUAN<br> 

    JURUSAN : <br><select name="JURUSAN"><br>
              <option value="REKAYASA PERANGKAT LUNAK">RPL</option> 
              <option   value="TEKNIK KENDARAAN RINGAN">TKR</option>   
              <option   value="TEKNIK SEPEDA MOTOR">TSM</option>   
    
    NAMA AYAH: <br><input type="text" name="NAMAAYAH"><br>
    PEKERJAAN AYAH : <br><input type="text" name="PEKERJAANAYAH"><br>
    NAMA IBU : <br><input type="text" name="NAMAIBU"><br>
    PEKERJAAN IBU : <br><input type="text" name="PEKERJAANIBU"><br>
    HOBI : <br><input type="cheakbox" name="HOBI"><br>
         <input type="checkbox" name="Hobi01" value="Badminton" 
         checked> 
         Badminton <br>
         <input type="checkbox" name="Hobi02" value="Voli ">
          Voli <br>
         <input type="checkbox" name="Hobi03" value="Berenang">
         Berenang <br>
         <input type="checkbox" name="Hobi04" value="Sepak Bola">
         Sepak Bola<br> 
    
    <input type="submit" name="Simpan" value="Simpan"style ="color : blue">
    <input type="reset" name="reset" value="Reset"style ="color : red">
 </FORM> 
</body>
</html>
</body>
</html>
<!DOCTYPE html>
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
    <h2>FORMULIR PENDAFTARAN</h2>  
    NO PENDAFTARAN   : <br><input type="nomber" name="NOPENDAFTARAN"><br><br>
    NISN : <br><input type="nomber" name="NISN"><br><br>
    NAMA : <br><input type="text" name="NAMA"><br><br>
    AGAMA :<br><select name = "AGAMA">
           <option value="ISLAM">ISLAM</option> 
           <option  value="KRISTEN">KRISTEN</option>
           </select><br><br>
    ALAMAT : <br><textarea name ="ALAMAT" cols ="40" rows = "1"></textarea><br><br>

    TEMPAT LAHIR : <br><input type="checkdate" name="TEMPATLAHIR"><br><br>
    TANGGAL LAHIR : <br><input type="date" name="TANGGALLAHIR"><br><br>
    ASAL SEKOLAH : <br><input type="text" name="ASALSEKOLAH"><br><br>

    JENIS KELAMIN : <br><input type="radio" name="JENISKELAMIN" value="LAKI-LAKI"> 
           LAKI-LAKI<br>
           <input type="radio" name="JENISKELAMIN" value="PEREMPUAN">
           PEREMPUAN<br><br>

    JURUSAN : <br><select name="JURUSAN">
              <option value="REKAYASA PERANGKAT LUNAK">RPL</option> 
              <option value="TEKNIK KENDARAAN RINGAN">TKR</option>   
              <option value="TEKNIK SEPEDA MOTOR">TSM</option>
              </select><br><br>  
    
    NAMA AYAH: <br><input type="text" name="NAMAAYAH"><br><br>
    PEKERJAAN AYAH : <br><input type="text" name="PEKERJAANAYAH"><br><br>
    NAMA IBU : <br><input type="text" name="NAMAIBU"><br><br>
    PEKERJAAN IBU : <br><input type="text" name="PEKERJAANIBU"><br><br>
    HOBI : <br><input type="checkbox" name="HOBI" value="Badminton" > 
         BADMINTON <br>
         <input type="checkbox" name="HOBI2" value="Voli ">
          VOLI <br>
         <input type="checkbox" name="HOBI3" value="Berenang">
         BERENANG <br>
         <input type="checkbox" name="HOBI4" value="Sepak Bola">
         SEPAK BOLA<br> 
    
    <input type="submit" name="Simpan" value="Simpan"style ="color : blue">
    <input type="reset" name="reset" value="Reset"style ="color : red">
 </FORM> 
</body>
</html>
</body>
</html>
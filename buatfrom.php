<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BUAT FROM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<FORM ACTION="rosbuatfrom.php" METHOD="POST" NAME="input">
<h2 style ="color : green">PEMBELIAN BARANG</h2> 
Nama : <br><input type="text" name="Nama"><br><br>
Alamat : <br><textarea name ="Alamat" cols ="40" rows = "1"></textarea><br><br>
Kecamatan : <br><input type="text" name="Kecamatan"><br><br>
Kota : <br><input type="text" name="Kota"><br><br>
Provinsi : <br><input type="text" name="Provinsi"><br><br>
Kode Pos : <br><input type="number" name="KodePos"><br><br>
Nama Barang : <br><input type="text" name="NamaBarang"><br><br>
Harga Barang : <br><input type="number" name="HargaBarang"><br><br>
Jumlah Barang : <br><input type="number"mine='1' name="JumlahBarang"><br><br>
Dekripsi : <br><textarea name="Dekripsi" cols ="40" rows ="2"></textarea><br><br>
Tanggal Pembelian : <br><input type="date" name="TanggalPembelian"><br><br>
Bayar : <br><input type="number" name="Bayar"><br><br>
<br>

<input type="submit" name="Simpan" value="Simpan"style ="color : blue">
    <input type="reset" name="reset" value="Reset"style ="color : red">
</body>
</html>
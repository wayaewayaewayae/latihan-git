<?php
if (isset($_POST['Simpan'])) {
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat']; 
    $Kecamatan = $_POST['Kecamatan'];
    $Kota = $_POST['Kota'];
    $Provinsi = $_POST['Provinsi'];
    $KodePos = $_POST['KodePos'];
    $NamaBarang = $_POST['NamaBarang'];
    $HargaBarang = $_POST['HargaBarang'];
    $JumlahBarang = $_POST['JumlahBarang'];
    $Dekripsi = $_POST['Dekripsi'];
    $TanggalPembelian = $_POST['TanggalPembelian'];
    $Bayar = $_POST['Bayar'];
    $HarusMembayar = $_POST['HarusMembayar'];
}
$Bayar=($HargaBarang*$JumlahBarang); {


}
if ($JumlahBarang > 10) {
$diskon=(($Bayar*5)/100);
$HarusMembayar=($Bayar-$diskon);
}
if ($JumlahBarang > 5) {
$diskon=(($Bayar*3)/100);
$HarusMembayar=($Bayar-$diskon);

echo "Nama : " . $Nama. "<br>";
echo "Alamat : " . $Alamat . "<br>";
echo "Kecamatan : " . $Kecamatan . "<br>";
echo "Kota : " . $Kota . "<br>";
echo "Provinsi : " . $Provinsi . "<br>";
echo "Kode Pos : " . $KodePos . "<br>";
echo "Nama Barang : " . $NamaBarang . "<br>";
echo "Harga Barang : " . $HargaBarang . "<br>";
echo "Jumlah Barang : " . $JumlahBarang . "<br>";
echo "Dekripsi : " . $Dekripsi . "<br>";
echo "Tanggal Pembelian : " . $TanggalPembelian . "<br>";
echo "Bayar : " . $Bayar. "<br>";
echo "Yang Harus Dibayar: " . $HarusMembayar. "<br>";
}elseif ($JumlahBarang <= 0) {
    echo "Tidak Dapat Di Proses";
}

?>
<?php
//array key numerik 
$a = array('santia','27',true,'10.1');
echo $a[1] . "<br>";

for ($i=4; $i < 0; $i--) { 
    echo $a[$i] . "<br>";

}

//array key asosiatif
$aso = ['nama' => 'santia','umur' => 21,
         'alamat' => 'cilisung'];

foreach ($aso as $index) {
    echo $index . "<$aso br>";
}
?>
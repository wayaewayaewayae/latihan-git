<?php
if (isset($_POST['sbm'])) {
    $NAMA = $_POST['NAMA'];
    $KELAS = $_POST['KELAS'];

    foreach ($NAMA as $data){
        echo "Nama Saya : " . $NAMA[$data];
        "Kelas : " . $NAMA[$data] . "<hr>";
    }
}
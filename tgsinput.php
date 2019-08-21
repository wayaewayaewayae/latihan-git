<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengolahan Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <Form ACTION="" METHOD="POST" NAME="input">
    Nama Anda : <input type="text" name="nama"><br> 
    Nilai 1   : <input type="text" name="nilai1"><br> 
    Nilai 2   : <input type="text" name="nilai2"><br> 
    
    <input   type="submit"   name="Input" value="Input">
    <input   type="reset"   name="reset" value="Hapus">
    </FORM>
    </body>  
    </html>

    <?php 
    if (isset($_POST['Input'])) { 
        $nama = $_POST['nama']; 
        echo "Nama Anda : <b>$nama</b>"; 
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $b = ($nilai1+$nilai2)/2;
        echo '<br>';
        echo 'Nilai 1 = ' .$nilai1;
        echo '<br>';
        echo 'Nilai 2 = ' .$nilai2;
        echo '<br>';
        echo 'Nilai Rata-rata = ' .$b;
        } 
    ?>

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
    Nama Saya : <input type="text" name="nama"><br> 
    <input   type="submit"   name="Input" value="Input">
    </FORM>
    </body>  
    </html>

    <?php 
    if (isset($_POST['Input'])) { 
        $nama = $_POST['nama']; 
        echo "Nama Anda : <b>$nama</b>"; 
        } 
    ?>

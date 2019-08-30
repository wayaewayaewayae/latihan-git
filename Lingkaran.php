<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luas Lingkaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <legend>
       Luas Lingkaran
       </legend>
       <form action ="" method="get">
       <label for="" ></label>
       <input type="number" min="1" name="s" required>
       <br>
       <input type="submit" name="simpan" value="simpan">
       </form>
       <fieldset>

       <?php
    if (isset($_GET['simpan'])) {
    $sisi = $_GET['s'];
    function Luas_Lingkaran($s){
    $luas = 3.14 * $s * $s;
    return $luas;
    }
    function keliling_Lingkaran($k){
     $luas = 2 * $k * 3.14 ;
     return $luas;
    }
    $luas = Luas_Lingkaran($sisi);
    echo "Luas Lingkaran : $luas<br>";
    $keliling = keliling_Lingkaran($sisi);
    echo "Keliling : $keliling";
}
?>
</body>
</html>
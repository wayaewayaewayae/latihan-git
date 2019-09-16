<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luas Persegi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <legend>
       Luas Persegi
       </legend>
       <form action ="" method="get">
       <label for="" >Sisi</label>
       <input type="number" min="1" name="s" required>
       <br>
       <input type="submit" name="simpan" value="simpan">
       </form>
       <fieldset>

    <?php
    if (isset($_GET['simpan'])) {
    $sisi = $_GET['s'];
    
    function Luas_Persegi($s)
    {
     $luas = $s * $s;
     return $luas;
    }
    $luas = Luas_Persegi($sisi);
    echo "Luas Persegi : $luas";
}
    ?>
</body>
</html>
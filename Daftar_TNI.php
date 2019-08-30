<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar TNI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<legend>
       Daftar TNI
       </legend>
       <form action ="" method="get">
       <label for="" >Nama</label>
       <input type="text" name="nama" required>
       <label for="" >Berat Badan</label>
       <input type="number" min="1" name="s" required>
       <br>
       <label for="" >Tinggi Badan</label>
       <input type="number" min="1" name="k" required>
       <input type="submit" name="simpan" value="simpan">
       </form>
       <fieldset>

       <?php
       if (isset($_GET['simpan'])) {
           $bb = $_GET['s'];
           $tb = $_GET['k'];
           function tni($berat , $tinggi){
               if ($berat >= 60 && $tinggi >= 165){
                   $e = "DITERIMA";

               }else {
                   $e ="TIDAK DITERIMA";
               }
               return $e;
           }
           $terima = tni($bb , $tb);
           echo "Berat Badan Anda : $bb<br>";
           echo "Tinggi Badan Anda : $tb<br>";
           echo "Status Anda : $terima<br>";
       }
       ?>
</body>
</html>
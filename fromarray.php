<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>From Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <p>From Array</p>
</center>
<fieldset>
    <legend>From Array</legend>
    <from action ="" method="get">
        <label for"">Masukan Jumlah</label>
        <input type="number" name="jml">
        <br>
        </from>
        <?php
        if (isset($_GET['Sumbit'])){
            $jml_from = $_GET['jml'];
            for ($a = 1; $a<= $jml_from; $a++){
                ?>
                <From action ="Formarraypro.php"method="POST">
                    <label for="">NAMA</label>
                    <input type="text" name="nama[]"required>
                    <label for"">KELAS</label>
                    <br>
                    <br>

            <?php } ?>
            <input  type="Sumbit" name="sbm" value="SIMPAN">
            <input type="Reset" value="RESET">
            </From>
            <?php } ?>
        </fleidset>
        
        
    
</body>
</html>
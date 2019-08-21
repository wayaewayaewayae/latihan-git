<?php
for ($i=1; $i <= 10; $i++) {
echo '==================';
for ($j=1; $j <= 10; $j++) {
    $a = $i*$j;
    echo '<br>';
    if ($i % 2 == 1) {
    echo "$i x $j = $a bilangan ganjil <br>";
    }else{
    echo "$i x $j = $a bilangan genap <br>";
    }
}
}
?>
<?php

require "config.php";
$nama = "kucing";
$sekolah = "SMK TI BALI GLBOAL DENPASAR";
$alas = 5;
$tinggi = 8;
$luas = $alas * $tinggi / 2;
if (isset($_POST["hasil"])) {
    $ayam = $_POST["ayam"];
    $babi = $_POST["babi"];
    $hasil = $ayam + $babi;
   
}

echo $nama . " Sekolah di " .$sekolah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="" method="post">
    a : <input type="text" name="ayam" id="">
    <br>
    b : <input type="text" name="babi" id="">
    <button type="submit" name="hasil"> hasil</button>
    </form>
    <?php
    
    global $hasil, $luas;
    echo $hasil;
    $panjang = 10;
    $lebar = 10;
    $luasPer = $panjang * $lebar;
    $hasil_Lingkaran = 3.14 * 5 * 5;
    echo "Luas Persegi Panjang : $luasPer cm <br>";
    echo "Luas Lingkarang $hasil_Lingkaran cm <br>";
    echo "Luas Segitiga adalah : $luas cm <br>";
   
    ?>

<?php
for ($i=1; $i <= 10; $i++) { 
 echo "$i. saya tidak akan mengulagi nya lagi <br>";   
}

$a = 0;
while ($a <= 10) {
    echo "$a. DIGIDAW <br>";
    $a++;
}

 $binatangs = array();
 $binatangs = [
    "ayam",
    "sapi",
    "kerbau",
    "anjing",
    "wahyu",
    "agustinus",
    "kecoa",
    "adolf",
    "babi"
 ];
echo "<h3 style='color : blue;'>Nama binatang : </h3>"; ?>
<p>berikut adalah nama nama <span style="color : red;">hewan jinak : </span></p>
<ul>
 <?php foreach ($binatangs as $binatang) {?>
    <?php echo "<li>$binatang</li>"; ?>
 <?php } ?>
 </ul>
 

</body>
</html>
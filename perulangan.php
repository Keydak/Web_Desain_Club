<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="asomaso">
        <button type="submit" name="hasil">hai :D</button>
    </form>
    <?php
//     if (isset($_POST['hasil'])) {
//         $loop = $_POST['asomaso'];
//         for ($i=0; $i < $loop ; $i++) { 
//             echo"awokawok <br>";
//         }
//     }
//     for ($i=1; $i <= 10 ; $i++) { 
//         echo" $i . hello world! <br>";
//     }
// echo"<br>";
// for ($i=10; $i >= 1 ; $i--) { 
//     echo" $i . hello world! <br>";
// }

echo"<br>";
echo" FOR : <br>";
for ($i=0; $i < 10; $i++) { 
    echo"hello world! ($i)";
    for ($l=0; $l < $i ; $l++) { 
        echo"hello world! ($i , $l)";
    }
    echo"<br>";
}
echo"<br>";
echo" WHILE : <br>";
$a = 0;
while ($a < 10) {
    echo"hello world! ($a)";
    $g = 0;
    while ($a > $g) {
        echo"hello world! ($a , $g)";
        $g++;
    }
    $a++;
    echo"<br>";
}

echo"<br>";
echo"Reverse FOR : <br>";
for ($i=10; $i > 0; $i--) { 
    echo"hello world! ($i)";
    for ($l=0; $l < $i ; $l++) { 
        echo"hello world! ($i , $l)";
    }
    echo"<br>";
}
echo"<br>";
    ?>
</body>
</html>
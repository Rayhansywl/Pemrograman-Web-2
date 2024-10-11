<?php 
include "orang.php";
include "visibility.php";
include "nilai.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum 2</title>
</head>
<body>
  <h1>praktikum 2</h1>
  <div>
    <?php 
    $Rayhan = new orang();
    $Rayhan->nama=" Rayhan Syawal";
    $Rayhan->ucapSalam();
    echo"<br>";
    $Ronaldo=new orang();
    $Ronaldo->nama=" Ronaldo";
    $Ronaldo->ucapSalam();

    echo"<br>";

$visibility= new visability();
$visibility->tampilkanProperty();

echo"Ini diakses di luar kelas".'<br>';
    echo"public : " . $visibility->public.'<br>';
    // echo"protected : ".$visibility->protected.'<br>';
    //echo"private : ". $visibility->private.'<br>';
    
    echo"<br><br>";

    echo"Nilai mk pemrograman web: <br>";
    $nilai=new nilai();
    $nilai->setTugas(79);
    $nilai->setUts(90);
    $nilai->setUas(89);
    
    echo "Nilai Tugas : ".$nilai->gettugas()."<br>";
    echo "Nilai UTS : ".$nilai->getuts()."<br>";
    echo "Nilai UAS : ".$nilai->getuas()."<br>";
    echo"Rata-Rata : ".$nilai->hitungTotal();
    ?>

  </div>
</body>
</html>
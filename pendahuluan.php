<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITBootcamp</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <?php
      $name = 'Reva Arya Maulana';
      $npm = '217006092';
      $class = 'C';
      $matkul = 'Rekayasa Perangkat Lunak';
      $nilai = 95;
      $n = 5;

      echo  "Nama Saya, " .$name . 
            "<br>NPM : " .$npm . 
            "<br>Kelas : " .$class . 
            "<br>Mata Kuliah : " .$matkul;

    if ($nilai >= 88){
        echo '<br>Nilai A';
    }else if($nilai >= 70 && $nilai <80){
        echo '<br>Nilai B';
    }else {
        echo '<br>Nilai C';
    }

    while ($n < 10){
        echo '<br>Reva <br>';
        $n++;
    }

    for ($i = 0; $i < 10; $i++){
        echo '<br>Arya';
    }
    ?>
</body>
</html>
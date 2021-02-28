<?php
    require_once ("Mahasiswa.php");
    require_once ("MahasiswaBaru.php");


    $bayu = new Mahasiswa('H1101191035', 'Bayu firmadi', '2001-10-18', 'Pria');
    $tegar = new MahasiswaBaru('H1101191035', 'Tegar ferdigantara', '2002-10-08', 'Pria',1134);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php echo "<p>Mahasiswa prodi Sistem Infomasi</p>"; ?>
    
    <?php
        $bayu->tampilkanAngkatan();
        echo "<br>";
        $tegar->tampilkanAngkatan();
        echo "<br>";
        echo "<br>";
        $bayu->tampilkanUmur();
        echo "<br>";
        $tegar->tampilkanUmur();
    ?>
</body>
</html>
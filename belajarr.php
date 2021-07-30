<!DOCTYPE html>
<html>
<head>
	<title>
		Halaman Belajar
	</title>
</head>
<body>
	<?php

	//Deklarasi dan pemberian nilai array
	$hari = array("senin","selasa","rabu");

	$bulan = ["januari","februari","maret","april"];
    $mix = [123,"kucing","0.123"];

    echo "menggunakan echo";
    echo"<br>";
	echo $hari[1];
    echo "<br><br><br>";

    echo"menggunakan var_dump";
    echo"<br>";
	var_dump($hari);
	echo "<br><br><br>";


    echo"menggunakan print_r";
    echo"<br>";
	var_dump($bulan);
	echo "<br><br><br>";

	echo "-------Menginsert elemen array-------------";
	echo"<br><br>";

	echo"sebelum diinsertkan bulan mei";
	var_dump($bulan);
	echo "<br><br>";

    $bulan[] ="Mei";
    echo "setelah ditambahkan bulan mei";
    echo"<br>";
	var_dump($bulan);



	?>

</body>
</html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Membuat class */
include "class-kendaraan.php";
	$kendaraan1=new kendaraan($x,$y);
	$kendaraan1->bahanbakar="Pertalite";
	$kendaraan1->setMerek('Toyota Fortuner');
	$kendaraan1->setHarga(585000000);
	echo $kendaraan1->statusHarga();
	echo "<br>".$kendaraan1->harga;
	echo "<br>Harga dari ".$kendaraan1->merek." adalah ".$kendaraan1->harga;
	echo "<br>Bahan bakar dari ".$kendaraan1->merek." adalah ".$kendaraan1->bahanbakar;
	echo "<br>".$kendaraan1->dapatsubsidi();
	$kendaraan2=new kendaraan();
	$kendaraan2->setMerek("Toyota Yaris");
	$kendaraan2->setJmlroda(4);
	$kendaraan2->setHarga(160000000);
	$kendaraan2->setWarna("Merah");
	$kendaraan2->setbahanbakar("premium");
	echo "<br>".$kendaraan2->statusHarga();
	$kendaraan3=new kendaraan();
	$kendaraan3->setMerek("Honda Scoopy");
	$kendaraan3->setJmlroda(2);
	$kendaraan3->setHarga(13000000);
	$kendaraan3->setWarna("Putih");
	$kendaraan3->setbahanbakar("premium");
	echo "<br>".$kendaraan3->statusHarga();
	$kendaraan4=new kendaraan();
	$kendaraan4->setMerek("Isuzu Panther");
	$kendaraan4->setJmlroda(4);
	$kendaraan4->setHarga(170000000);
	$kendaraan4->setWarna("Hitam");
	$kendaraan4->setbahanbakar("Solar");
	echo "<br>".$kendaraan4->statusHarga();
	echo "<br>Kendaraan ".$kendaraan2->bacaMerek().",memiliki ".$kendaraan2->bacaRoda()." roda,berbahan bakar ".$kendaraan2->bacabhnbakar(). " dan harganya Rp ". $kendaraan2->bacaHarga();
	echo "<br>Kendaraan ".$kendaraan3->bacaMerek().",memiliki ".$kendaraan3->bacaRoda()." roda,berbahan bakar ".$kendaraan3->bacabhnbakar(). " dan harganya Rp ". $kendaraan3->bacaHarga();
	echo "<br>Kendaraan ".$kendaraan4->bacaMerek().",memiliki ".$kendaraan4->bacaRoda()." roda,berbahan bakar ".$kendaraan4->bacabhnbakar(). " dan harganya Rp ". $kendaraan4->bacaHarga();
	$keretaapi1=new keretaapi("Gaya Baru Malam",250000000);
	$keretaapi1->setgerbong(8);
	echo "<br>Jumlah gerbong dari kereta". $keretaapi1->bacaMerek()." yang seharga".$keretaapi1->bacaHarga()."adalah ". $keretaapi1->bacagerbong();

?>
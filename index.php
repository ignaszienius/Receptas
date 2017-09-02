<!DOCTYPE html>
<html>
<head>
	<title>Troskinio receptas</title>

</head>
<body>
<?php
$troskinys=["jautiena"=>250,"pupeles"=>500,"vanduo"=>500, "pomidorai"=>300,"paprika"=>100];
$suma = "";
echo '<table>';
foreach ($troskinys as $ingridient => $kiekis) {
	echo  '<tr>' . '<td>' . $ingridient . '</td>' . '<td>' . $kiekis . '</td>'.'<tr>' ; 
	$suma = $suma + $kiekis;
}
echo '</table>'	;
echo "Visu ingridientu suma yra:" . $suma;

checkwater($troskinys) {
	$pup = $troskinys['pupeles'];
	$h2o = $toskinys['vanduo'];

	if($pup > $h2o) {
		echo "Perdaug pupeliu, brolau. Pripilk daugiau vandens";
	} else {
		echo "viskas ok, vandens uztenka, gali toliau virt";
	}
	
}


?>
</body>
</html>
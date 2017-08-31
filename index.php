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
	
}


?>
</body>
</html>
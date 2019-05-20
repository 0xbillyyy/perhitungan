<?php
error_reporting(0);
echo "\n######################";
echo "         KURANG      ";
echo "######################\n";
echo "\nangka==> ";
$a1=trim(fgets(STDIN));
if($a1==true){
	echo "Dikurangi angka==> ";
	$a2=trim(fgets(STDIN));
	echo "jadi hasilnya = ";
	echo $a1-$a2."\n\n";
	exit();
}else{
	echo "bingung gannn:(\n\n";
	exit();
}

?>

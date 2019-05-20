<?php
error_reporting(0);
echo "\n######################";
echo "         KALI        ";
echo "######################\n";
echo "\nangka ==> ";
$jan=trim(fgets(STDIN));
if($jan==true){
	echo "dikali dengan==> ";
	$cok=trim(fgets(STDIN));
	echo "hasilnya ialah = ".$jan*$cok."\n\n";
	exit();
}else{
	echo "jumlahnya pasti 0\n";
	echo "karena anda memberi angka 0\n\n";
	exit();
}
?>

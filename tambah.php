<?php
error_reporting(0);
echo "\n######################";
echo "        TAMBAH       ";
echo "######################\n";
echo "\nAngka==> ";
$a1=trim(fgets(STDIN));
if($a1==true){
	echo "Ditambah angka==> ";
	$a2=trim(fgets(STDIN));
	echo "jadi hasilnya = ";
	echo $a1+$a2."\n\n";
	exit();
}elseif($a1==0){
	echo "maaf pak masa hitung 0 aja gabisa:v\n\n";
	exit();
}else{
	echo "saya gak tahu pak\n";
	exit();
}
?>

<?php
error_reporting(0);
echo "\nangka ==> ";
$a=trim(fgets(STDIN));
if ( $a == true ){
	echo "dicaplok dengan angka==> ";
	$b=trim(fgets(STDIN));
	if($a<$b){
		echo "\n".$a ." lebih kecil dari ".$b."\n\n";
	}elseif($a==$b){
		echo "\n".$a ." sama dengan ".$b."\n\n";
	}else{
		echo "\n".$a." lebih besar dari ".$b."\n\n";
	}
	exit();
}elseif($a == "0"){
	echo "\ntolong masukan angka jangan 0 hehehe\n";
	exit();
}
?>

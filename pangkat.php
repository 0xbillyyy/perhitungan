<?php
error_reporting(0);
echo "\n######################";
echo "        PANGKAT      ";
echo "######################\n";
function pangkat($a, $b)
{
  $bil = $a;
  for($i=0;$i<($b-1);$i++)
  {
  $bil = $bil * $a;
  }
  return $bil;
}
echo "\nangka==> ";
$a=trim(fgets(STDIN));
if( $a == true ){
	echo "di pangkat==> ";
	$b=trim(fgets(STDIN));
	echo "hasilnya adalah ";
	echo pangkat($a,$b)."\n\n";
	exit();
}elseif($a==0){
	echo "masukan angka pak,,jangan 0\n\n";
	exit();
}else{
	echo "gapaham hehehe";
	exit();
}
?>

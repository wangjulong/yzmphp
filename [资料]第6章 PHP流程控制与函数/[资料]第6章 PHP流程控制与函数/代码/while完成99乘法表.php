<?php 
/*
实例: 99乘法表
1*1=1
1*2=2 2*2=4
1*3=3 2*3=6 3*3=9
1*4=4 2*4=8 3*4=12 4*4=16
*/

$i=1;
while($i<=9){
	
	$j=1;
	while($j<=$i){
		echo "{$j}*{$i}=".$j*$i.'&nbsp;&nbsp;&nbsp;';
		$j++;	
	}
	echo '<br>';

	$i++;
}

 ?>
<!--  -->
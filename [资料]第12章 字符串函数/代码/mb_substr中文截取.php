<?php 
//多字节截取

$str='我的名字叫小马，我的哥哥叫小白菜，我的弟弟叫小聂子!';

echo mb_substr($str,0,10).' ...';
 ?>

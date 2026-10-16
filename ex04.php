<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<pre><?php
$v1=42; $v2="42"; $v3=15.8; $v4=true; $v5=false; $v6=null;
var_dump($v1,$v2,$v3,$v4,$v5,$v6);
$c1=(int)$v2; $c2=(int)$v3; $c3=(string)$v1;
var_dump($c1); var_dump($c2); var_dump($c3);
echo $v4; echo $v5;
var_dump($v4); var_dump($v5);
var_dump((bool)0); var_dump((bool)"0"); var_dump((bool)"PHP"); var_dump((bool)[]);
?></pre>
</body></html>
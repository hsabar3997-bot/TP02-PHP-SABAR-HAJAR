<?php
$i=0; while($i<=20){ if($i%2==0){ if($i==10) echo "<b>$i</b> "; else echo "$i "; } $i++; }
echo "<br>";
$c=5; $e=0; while($c<5){ $e++; $c++; } echo $e."<br>";
$c=5; $e=0; do{ $e++; $c++; }while($c<5); echo $e."<br>";
for($n=1;$n<=20;$n++){ if($n>=16) break; if($n%3==0) continue; echo "$n "; }
?>
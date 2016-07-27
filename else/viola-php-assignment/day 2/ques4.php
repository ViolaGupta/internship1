

<?php
    $n; $sum=0; $n1;
  for ($n=2; $n<1000; $n++)
    {$n1=$n; $sum=0;
 while($n1>0)
 {
     $sum = pow(($n1%10),3) + $sum;
  $n1=(int)($n1/10);
     
 }
if($sum==$n)
{echo "arm number:".$n."<br>";}
}
        
    
?>
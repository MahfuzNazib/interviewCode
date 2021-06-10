<!-- Armstrong number is like cube sum of main number -->
<!-- 407 -->
<!-- (4*4*4) + (0*0*0) + (7*7*7) = 407 -->

<?php  
$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
    $rem=$x%10;  
    $total=$total+$rem*$rem*$rem;  
    $x=$x/10;  
}  
if($num==$total)  
{  
    echo "Yes it is an Armstrong number";  
}  
else {  
    echo "No it is not an armstrong number";  
}  
?>
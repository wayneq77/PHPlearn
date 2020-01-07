<?php
    $x=1;
    function hello($x){
        $sum = $x * 2;
        echo "function end<br />"; 
        return $sum;
        }
?>
<p>----------------</p>
<?php
    $sum = hello($x);
    echo "x=$x<br />";
    echo "sum=$sum<br />";
    ?>

<p>----------------</p>
<?php
define('PI',3.14159);
$cir = 3 * 3 * PI;
echo "圓面積:".$cir;
?>
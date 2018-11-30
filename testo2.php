<?php
// TEST Fibonacci

$n = 5;
$a = 0;
$b = 1;
function  fi($n) {
    $arr = [];
    global $a;
    global $b;
    
    for ($i = 0; $i < $n; $i++){
        $z = $a + $b;

        if($n >= 1){
            $arr[] = $a;
        }
        else if($n >= 2){
            $arr[] = $b;
        }
        else if($n >= 3){
            $arr[] = $z;
        }
   
        $a = $b;
        $b = $z;
    }
     return $arr;
}

$newArr = fi($n);

foreach ($newArr as $k => $v) {
    echo $v . "<br>";
}
    
    
?>
    


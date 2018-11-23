<?php
function fibonacci($n,$first = 0,$second = 1)
{
    
    $a = 0;
    $b = 1;
    $c = $a+$b;
    
    for($i=0;$i<$n;$i++){
        if ($i = 0){
            $fib[] = $a;
        }
        else if ($i = 1){
            $fib[] = $b;
        }
        else {
            $fib[] = $c;
            $a = $b;
            $b = $c;
            $c = $a+$b;
        }
        
    }
    
    return $fib;
}
foreach(fibonacci(4) as $k ){
    echo $k;
}
?>
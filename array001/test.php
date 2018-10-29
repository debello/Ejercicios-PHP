<?php
function test()
{
    static $count = 0;

    $count++;
    echo "uno: " . $count . "<br>";
    if ($count < 2) {
        test();
    }
    $count--;
    echo "dos: " . $count . "<br>";
}
test();
?>
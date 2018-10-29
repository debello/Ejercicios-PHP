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

/** [1]
*   l6: 1
*   l8 vuelve a ejecutar
*       2
*           vuelve a ejecutar
*               1
*               0
*
*
*
*/




?>
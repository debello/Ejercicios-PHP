<?php
    /**
     * Ordenar los valores de la siguiente cadena:
     * $ex = [1 => 2, 3 => 4, 5 => 2]
     * en
     * $ex2 = [2 => (1, 5), 3 => 4];
     * 
     * To-Do: Insertar las keys respectivas de sus valores
     * line 50
     */

    $ex = array('hola' => 'adios', 
                'buenas' => 'abur', 
                'sup' => 'adios');

    function merge($arr) {
        $exKeys = array_keys($arr);
        $exValues = array_values($arr);
        $new = array_combine($exValues, $exKeys);
        return $new; 

    } /* [!!!!] Se come el valor repetido (2 o 'adios') lul*/


    /* Intentar cambiar valores x keys y viceversa*/

    $revEx = merge($ex);
    var_dump($revEx);
    foreach ($revEx as $k => $v) {
        echo 'test' .$k , $v . "<br>";
    }







    /* CANCELLED?
    * muy complicado
    *  focus en cambiar los valores y keys directamente en el array
    * 
    * 
    * /

    echo $ex[0] . "<br>";
    echo $ex[0][1] . "<br>";
    echo $ex[1][0] . "<br>";

    foreach ($ex as $k => $v) {
        echo $k , $v . "<br>";
    }



    $exKeys = array_keys($ex);
    $exValues = array_values($ex);

    echo $exKeys[0] . "<br>";
    echo $exKeys[1] . "<br>";
    echo $exKeys[2] . "<br>";
    echo "<br>";
    echo $exValues[0] . "<br>";
    echo $exValues[1] . "<br>";
    echo $exValues[2] . "<br>";
    $exSize = sizeof($ex);
    echo "<br> test: <br>" .  $ex[$exKeys[2]];
    $ex[$exKeys[2]][] = 5;
    /* 
    Escogemos 3 como el size porque de lo contrario cuando i sea 0
    a será 0 y cuando i sea 1 a será 0... entonces no 'arrancará'
    y para cuando lo haga i será 2 y no lo podremos comparar $a con el
    siguiente valor 
    todo: aclarar la explicación

    for ($i = 0; $i < 3; $i++){ 
        for ($a = 0; $a < $i; $a++){
            if ($exValues[$i] === $exValues[$a]) {
                echo "Hemos insertado un valor $exValues[$i]<br>";
                // Values (2 from [0][1] and 2 from [2][1])
                $exArray[] = $exValues[$i];
                // Keys (1 from [0][0] and 5 from [2][0])
                $exArray2[] = $exKeys[$a];
                $exArray2[] = $exKeys[$i];
                /*
                $exArray[$a] = $exKeys[$a];
                $exArray[$a] = $exKeys[$i];
                
            }
            else {
                //$exClean[] = $ex
            }
        }
    }
    foreach ($exArray as $k => $v) {
        echo $k , $v . "<br>";
    }
    echo "<br>";
    foreach ($exArray2 as $k => $v) {
        echo $k , $v . "<br>";
    }
    echo "<br>";
    $newArr[] = $exArray;
    $newArr[0] = $exArray2;

    foreach ($newArr[0] as $k => $v) {
        echo $k , $v . "<br>";
    }

    var_dump($newArr);
    */
    /* 
    array(2) { [0]=> array(1) 
        { [0]=> int(2) } [2]=> array(2) 
        { [0]=> int(1) [1]=> int(5) }}


    */

?>
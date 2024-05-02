<?php

function somar($n1, $n2)
{
    return $n1 + $n2;
}
function positivoNegativo($v)
{
    if ($v > 0) {
        return "Valor positivo";
    } else if ($v < 0) {
        return "Valor negativo";
    } else {
        return "Igual a zero";
    }
}

function triploOuSoma($v1 , $v2)
{

    if ($v1 == $v2) {
        $triple = $v1 * 3;
        echo "O resultado é $triple";
        } 
    
    else {
        $soma = $v1 + $v2;
        echo "O resultado é $soma";

    } 

    function tabuada($n)
    {
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $n * $i;
            echo "$n x $i = $resultado <br>";
        }
    }

}

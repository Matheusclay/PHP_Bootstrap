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

function triploOuSoma($v1, $v2)
{

    if ($v1 == $v2) {
        $triple = $v1 * 3;
        echo "O resultado é $triple";
    } else {
        $soma = $v1 + $v2;
        echo "O resultado é $soma";

    }

}

function tabuada($n)
{
    
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $n * $i;
        
        echo "$n x $i = $resultado <br>";
    }
}

function fatorial($n)
{
    $fatorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fatorial = $fatorial * $i;
    }
    return $fatorial;
}

function OrdemCrescente ($valor1, $valor2) {
    if ($valor1 > $valor2) {
        echo "$valor2 $valor1";
 }

    if ($valor2 > $valor1) {
        echo "$valor1 $valor2";
 }

    if ($valor1 == $valor2) {
        echo "Números iguais: $valor1";
 }

}

function conversaoCentimetros($valor1) {
    $resultado = $valor1 * 100;
    echo "O valor de $valor1 metros em centímetros é $resultado";
}

function calcIdade($valor1)
{
    $anoatual = 2024;
    $idade = $anoatual - $valor1;
    $dias = $idade * 365;
    $idade2 = 2025 - $valor1;

    echo "idade atual: $idade , dias vividos $dias e sua idade em 2025 é $idade2";
}

function calcIMC($valor1, $valor2)
{
    $imc = $valor1 / ($valor2 * $valor2);
    if ($imc < 18.5) {
        echo "Abaixo do peso";
    } else if ($imc >= 18.5 && $imc < 24.9) {
        echo "Peso normal";
    } else if ($imc >= 25) {
        echo "Acima do peso";
    } else if ($imc >= 0) {
        echo "Valor inválido";
    } else if ($imc < 0) {
        echo "Valor inválido";
    } else {
        echo "Valor inválido";
    }
}
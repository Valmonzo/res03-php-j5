<?php

function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

function substract(int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}

function multiply(int $nb1, int $nb2) : int
{
    return $nb1 * $nb2;
}

function divide(int $nb1, int $nb2) : ?int
{
    return $nb1 / $nb2;
}

function modulo(int $nb1, int $nb2) : ?int
{
    return $nb1 % $nb2;
}

function power(int $nb1, int $nb2) : int
{
    return $nb1 ** $nb2;
}

function factorial(int $nb1) : int
{
    $fact = 1;
    for ($i = 1; $i <= $nb1; $i++){
      $fact = $fact * $i;
    }
    return $fact;
}



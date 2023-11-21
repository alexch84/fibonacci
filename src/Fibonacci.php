<?php

namespace Achugunov\Fibonacci;

class Fibonacci
{
    public function getNumber($n)
    {
        return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
    }
}
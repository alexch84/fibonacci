# Числа Фибоначчи

Выводит n-й элемент последовательности чисел Фибоначчи

## Требования

- PHP 5.6

## Установка

```bash
$ composer require achugunov/fibonacci
```

## Использование

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Achugunov\Fibonacci\Fibonacci;

$fibonacci = new Fibonacci();
echo $fibonacci->getNumber(7); //13
```
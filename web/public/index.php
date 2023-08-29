<?php
require_once 'Classes/PersonClass.php';
$person = new PersonClass();

$tom = $person;
$tom -> name = "Tom";
$tom -> age = 36;

$tomas = $person;

if($tom == $tomas) echo "переменные tom и tomas равны<br>";
else echo "переменные tom и tomas НЕ равны<br>";

if($tom === $tomas) echo "переменные tom и tomas эквивалентны";
else echo "переменные tom и tomas НЕ эквивалентны";
<?php
include_once 'Duck.class.php';
include_once 'Quack.interface.php';
include_once 'Quack1.class.php';
include_once 'MutouDuck.class.php';

$mutouDuck = new MutouDuck();

$quack1 = new Quack1();

$mutouDuck->setQuack($quack1);
$mutouDuck->quack();
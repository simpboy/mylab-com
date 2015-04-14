<?php
include_once "IObserver.php";
include_once "ISubject.php";
include_once "ObserverA.class.php";
include_once "ObserverB.class.php";
include_once "Subject.class.php";

$Subject = new Subject();

$ObserverA = new ObserverA($Subject);
$ObserverB = new ObserverB($Subject);


$Subject->register($ObserverA);
$Subject->register($ObserverB);

$ObserverB->un_listen();
$Subject->setState(15);
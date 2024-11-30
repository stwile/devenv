<?php

interface AnimalInterface {}

class Animal implements AnimalInterface {}

class Dog extends Animal {}

interface PetInterface {}

$dog = new Dog();

var_dump($dog instanceof Dog); // 出力: bool(true)
var_dump($dog instanceof Animal); // 出力: bool(true)
var_dump($dog instanceof AnimalInterface); // 出力: bool(true)
var_dump($dog instanceof PetInterface); // 出力: bool(false)

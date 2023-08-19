<?php

interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo 'Woof! <br>';
    }
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo 'Meow! <br>';
    }
}

class Cow implements Animal
{
    public function makeSound()
    {
        echo 'Moo! <br>';
    }
}

$dog = new Dog;
$dog->makeSound();

$cat = new Cat;
$cat->makeSound();

$cow = new Cow;
$cow->makeSound();



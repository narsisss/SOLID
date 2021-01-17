<?php

class Person {

    public function name() : string
    {
        return 'Adam';
    }

    public function age() : int
    {
        return 20;
    }

}

class Narges extends Person {

    public function name() : string
    {
        return 'Narges';
    }

    public function age() : int
    {
        return 30;
    }

}

$newPerson = new Narges();
echo $newPerson->name() . ' With Age Of ' . $newPerson->age();
<?php
class Person
{

    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }
    function sayHi($name)
    {
        return "Hi $name, I`m " . $this->name;
    }
    function setHP($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHP()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getAge()
    {
        return $this->age;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }

    function getInfo()
    {
        return "
        <h3>A few words about myself:</h3><br>" . ".My name is: " . $this->getName() . "<br> my lastname is: " . $this->getLastname() . "<br> my mother is: " . $this->getMother()->getName() . "<br> my father is: " . $this->getFather()->getName() . "<br> my mom's dad is: " . $this->getMother()->getFather()->getName() . "<br> my mom's mom is: " . $this->getMother()->getMother()->getName() . "<br> my daddy's dad is: " . $this->getFather()->getFather()->getName() . "<br> my daddy's mom is: " . $this->getFather()->getMother()->getName() . "<br> they are from Israel";
    }
}
// ЗДОРОВЬЕ ЧЕЛОВЕКА НЕ МОЖЕТ БЫТЬ БОЛЬШЕ 100 
$moisha = new Person("Moisha", "Shuher", 73);
$zusya = new Person("Zusya", "Fraer", 70);
$igor = new Person("Igor", "Petrov", 68);
$sveta = new Person("Sveta", "Petrova", 65);

$alex = new Person("Alex", "Ivanov", 42, $zusya, $moisha);
$olga = new Person("Olga", "Ivanova", 42, $sveta, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getName() . " ";
echo $valera->getLastname() . ", ";
echo $valera->getAge() . " years old <br>";

//echo $valera->mother->getName(); Так работать не будет, только через getter
echo $valera->getMother()->getName() . " "; //Получаем имя мамы Валеры
echo $valera->getMother()->getLastname() . ", ";
echo $valera->getMother()->getAge() . " years old <br>";

echo $valera->getFather()->getName() . " ";
echo $valera->getFather()->getLastname() . ", ";
echo $valera->getFather()->getAge() . " years old <br>";

echo $valera->getMother()->getFather()->getName() . " "; //Получаем дедушку Валеры
echo $valera->getMother()->getFather()->getLastname() . ", ";
echo $valera->getMother()->getFather()->getAge() . " years old <br>";

echo $valera->getMother()->getMother()->getName() . " ";
echo $valera->getMother()->getMother()->getLastname() . ", ";
echo $valera->getMother()->getMother()->getAge() . " years old <br>";

echo $valera->getFather()->getFather()->getName() . " ";
echo $valera->getFather()->getFather()->getLastname() . ", ";
echo $valera->getFather()->getFather()->getAge() . " years old <br>";

echo $valera->getFather()->getMother()->getName() . " ";
echo $valera->getFather()->getMother()->getLastname() . ", ";
echo $valera->getFather()->getMother()->getAge() . " years old <br>";


echo $valera->getInfo();

// $igor = new Person("Igor", "Petrov", 38);
// echo $alex->sayHi($igor->name);
// $alex->name = "Alex";
// echo $alex->name;
// $medKit = 50;

// $alex->setHp(-30); //Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);
// echo $alex->getHp();

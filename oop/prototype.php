<?php

abstract class WorkerPrototype
{
    protected string $name;
    protected string $position;
    protected string $salary;


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getSalary(): string
    {
        return $this->salary;
    }

    public function setSalary(string $salary): void
    {
        $this->salary = $salary;
    }
}

class Developer extends WorkerPrototype
{
    protected string $position = 'Developer';
}

class Designer extends WorkerPrototype
{
    protected string $position = 'Designer';
}

$developer = new Developer();
//$developer->setName("Vasiliy");
$developer2 = clone $developer;
$developer2->setName("Boris");
$developer2->setSalary('30000');

$designer = new Designer();
$designer ->setSalary("100000");
$designerNew = clone $designer;

//var_dump($developer->getName());
var_dump($developer2);
//var_dump($designerNew);
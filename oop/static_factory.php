<?php

interface Worker
{
    public function work();
}

class Developer implements Worker
{
    public function work()
    {
        printf('im developing');
    }
}

class Designer implements Worker
{
    public function work()
    {
        printf('im designing');
    }
}

class WorkerFactory
{
    public static function make($workerTitle): ?Worker
    {
        $ClassName = strtoupper($workerTitle);

        if (class_exists($ClassName)) {
            return new $ClassName;
        }

        return null;
    }
}

$developer = WorkerFactory::make('designer');
$developer->work();
echo "\n";
$developer1 = WorkerFactory::make('developer');
$developer1->work();
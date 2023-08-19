<?php

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSalary($salary)
    {
        if ($salary < 1000) {
            throw new Exception('The salary is too low.');
        }

        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$employee = new Employee('Nazim Uddin', 2000);
echo $employee->getName() . ' has a salary of ' . $employee->getSalary() . '<br>';

$employee->setSalary(5000);
echo $employee->getName() . ' has a salary of ' . $employee->getSalary() . '<br>';









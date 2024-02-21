<?php



class Epemloyre
{
    public $name;

    public $email;

    public $phone;

    protected float $salary;


    public function getSalary()
    {
        return $this->salary;
    }
    
}

class Manager extends Employee
{
    public int $tax;

    public function
}

<?php

class EmployeeManager
{
    private array $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function add($employee)
    {
        $this->employees[] = $employee;
    }


}
<?php
class Employee{
    public $firstName;
    public $lastName;
    public $dateOfBirth;
    public $address;
    public $jobPosition;

    public function __construct($firstName,$lastName,$dateOfBirth,$address,$jobPosition)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->jobPosition = $jobPosition;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }


    public function setDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address): void
    {
        $this->address = $address;
    }


    public function getJobPosition()
    {
        return $this->jobPosition;
    }


    public function setJobPosition($jobPosition): void
    {
        $this->jobPosition = $jobPosition;
    }


}

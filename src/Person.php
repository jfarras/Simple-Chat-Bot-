<?php

class Person
{
   
    protected $name;
    protected $age;
    protected $email;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAge()
    {
        return $this->phone;
    }

    public function setAge($Age)
    {
        $this->Age = $Age;

        return $this;
    }
}
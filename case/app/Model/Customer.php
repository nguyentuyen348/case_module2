<?php


namespace App\Model;


class Customer
{
        private $customerId;
        private $email;
        private $username;
        private $password;


    public function __construct($username,$email, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }



    public function getCustomerId()
    {
        return $this->customerId;
    }


    public function setCustomerId($customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username): void
    {
        $this->username = $username;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }

}
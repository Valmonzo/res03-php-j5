<?php

class User {

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    public function __construct(string $firstName, string $lastName, string $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->id = -1;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function setFirstName(string $firstName) : string
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) : string
    {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email) : string
    {
        $this->email = $email;
    }


    public function getFullName() : string {

        return $this->firstName .' '. $this->lastName;
    }
}

?>
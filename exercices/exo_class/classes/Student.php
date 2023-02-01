<?php

class Student {

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private array $grades;

    public function __construct(string $firstName, string $lastName, string $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->id = -1;
        $this->grades = [];.
    }

    // Getter

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

    public function getGrades() : array
    {
        return $this->grades;
    }

    //Getter

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function setGrades(array $grades) : array
    {
        $this->grades = $grades;
    }

    //Method

    public function getFullName() : string
    {
        return $this->firstName .' '. $this->lastName;
    }

    public function addGrade(int $nb) : array
    {
        $this->grades[] = $nb;
        return $this->grades;
    }

    public function removeGrade(int $nb) : array
    {
        for($i = 0; $i < count($this->grades); $i++)
        {
            if ($this->grades[$i] === $nb) {
                unset($this->grades[$i]);
                return $this->grades;
            }
        }
    }

    public function getAverage() : ?float
    {
        $total = 0;

        for($i = 0; $i < count($this->grades); $i++)
        {
            $total += $this->grades[$i];
        }

        if(count($this->grades) <= 0)
        {
            return null;
        }

        else
        {
        return $total / count($this->grades);
        }
    }
}

?>
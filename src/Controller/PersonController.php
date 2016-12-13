<?php

namespace Controller;

use Model\Person;

class PersonController
{
    public function getPerson($id)
    {
        $this->service->getPerson($id);
    }

    public function addPerson()
    {
        $person = new Person;
        $this->orm->addPerson($person);
    }

    public function deletePerson()
    {
        // person has been deleted
    }

    public function updatePerson()
    {
        // person has been updated
    }

    public function cgetPerson()
    {
        return $this->service->cget();
    }
}
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

    public function deletePerson(Person $person)
    {
        $this->orm->deletePerson($person);
    }

    public function updatePerson(Person $person)
    {
        $this->orm->updatePerson($person);
    }

    public function cgetPerson()
    {
        return $this->service->cget();
    }
}
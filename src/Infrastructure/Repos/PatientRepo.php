<?php


namespace Infrastructure\Repos;


use Domain\Patient\Patient;
use Domain\Patient\PatientRepoInterface;

class PatientRepo implements PatientRepoInterface
{


    /**
     * @param string $uuid
     * @return Patient
     */
    public function findByUUID(string $uuid):Patient
    {
        // TODO: Implement findByUUID() method.
    }

    /**
     * @param Patient $patient
     * @return void
     */
    public function save(Patient $patient)
    {
        // TODO: Implement save() method.
    }

    /**
     * @param string $uuid
     * @return bool
     */
    public function patientExists(string $uuid):bool
    {
        // TODO: Implement patientExists() method.
    }
}
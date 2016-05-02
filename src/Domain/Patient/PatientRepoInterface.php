<?php


namespace Domain\Patient;


interface PatientRepoInterface
{
    /**
     * @param string $uuid
     * @return Patient
     */
    public function findByUUID(string $uuid):Patient;

    /**
     * @param Patient $patient
     * @return void
     */
    public function store(Patient $patient);

    /**
     * @param string $uuid
     * @return bool
     */
    public function patientExists(string $uuid):bool;
}
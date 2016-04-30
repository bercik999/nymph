<?php


namespace Domain\Patient;


class PersonalData
{
    protected $firstname;
    protected $lastname;
    protected $phoneNumber;
    protected $email;

    /**
     * PersonalData constructor.
     * @param string $firstname
     * @param string $lastname
     * @param string $phoneNumber
     * @param string $email
     */
    public function __construct(
        string $firstname = null,
        string $lastname = null,
        string $phoneNumber = null,
        string $email = null
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }

}
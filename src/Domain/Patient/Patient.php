<?php

namespace Domain\Patient;

class Patient
{
    /**
     * @var PersonalData
     */
    protected $personalData;

    /**
     * @var BodyData
     */
    protected $bodyData;
    protected $notes;
    protected $uuid;
    
    /**
     * Patient constructor.
     * @param string $uuid
     * @param PersonalData $personalData
     * @param BodyData $bodyData
     * @param $notes
     */
    public function __construct(string $uuid, PersonalData $personalData, BodyData $bodyData, $notes)
    {
        $this->uuid = $uuid;
        $this->personalData = $personalData;
        $this->bodyData = $bodyData;
        $this->notes = $notes;
    }


}
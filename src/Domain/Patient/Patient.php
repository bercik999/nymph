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

    /**
     * Patient constructor.
     * @param PersonalData $personalData
     * @param BodyData $bodyData
     * @param $notes
     */
    public function __construct(PersonalData $personalData, BodyData $bodyData, $notes)
    {
        $this->personalData = $personalData;
        $this->bodyData = $bodyData;
        $this->notes = $notes;
    }


}
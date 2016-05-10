<?php

namespace Domain\Patient;

class Patient
{
    protected $uuid;
    /**
     * @var PersonalData
     */
    protected $personalData;

    /**
     * @var BodyData
     */
    protected $bodyData;
    /**
     * @var MetabolicNeeds
     */
    protected $metabolicNeeds;
    protected $notes;

    /**
     * Patient constructor.
     * @param string $uuid
     * @param PersonalData $personalData
     * @param BodyData $bodyData
     * @param MetabolicNeeds $metabolicNeeds
     * @param $notes
     */
    public function __construct(
        string $uuid,
        PersonalData $personalData,
        BodyData $bodyData,
        MetabolicNeeds $metabolicNeeds = null,
        string $notes = null
    ) {
        $this->uuid = $uuid;
        $this->personalData = $personalData;
        $this->bodyData = $bodyData;
        $this->metabolicNeeds = $metabolicNeeds;
        $this->notes = $notes;
    }
}
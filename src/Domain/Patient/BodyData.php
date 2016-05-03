<?php


namespace Domain\Patient;


class BodyData
{
    const FEMALE = 0;
    const MALE = 1;
    /**
     * @var float
     */
    protected $weight;
    /**
     * @var float
     */
    protected $height;
    /**
     * @var float
     */
    protected $bodyFatPercentage;
    /**
     * @var float
     */
    protected $waistHipsRatio;
    /**
     * @var integer
     */
    protected $sex;
    /**
     * @var \DateTime
     */
    protected $birthDate;
    /**
     * BodyData constructor.
     * @param float $weight
     * @param float $height
     * @param int $sex
     * @param \DateTime $birthDate
     * @param float $bodyFatPercentage
     * @param float $waistHipsRatio
     */
    public function __construct(
        float $weight = null,
        float $height = null,
        int $sex = null,
        \DateTime $birthDate = null,
        float $bodyFatPercentage = null,
        float $waistHipsRatio = null
    ) {
        $this->weight = $weight;
        $this->height = $height;
        $this->sex = $sex;
        $this->birthDate = $birthDate;
        $this->bodyFatPercentage = $bodyFatPercentage;
        $this->waistHipsRatio = $waistHipsRatio;
    }

    public function hasBasicData()
    {
        return $this->weight && $this->height && !is_null($this->sex) && $this->birthDate;
    }
}
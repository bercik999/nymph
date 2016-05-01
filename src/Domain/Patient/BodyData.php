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
     * @var float
     */
    protected $baseMetabolicRate;
    /**
     * @var float
     */
    protected $totalMetabolicRate;

    /**
     * BodyData constructor.
     * @param float $weight
     * @param float $height
     * @param float $bodyFatPercentage
     * @param float $waistHipsRatio
     * @param int $sex
     * @param float $baseMetabolicRate
     * @param float $totalMetabolicRate
     */
    public function __construct(
        float $weight = null,
        float $height = null,
        float $bodyFatPercentage = null,
        float $waistHipsRatio = null,
        int $sex = null,
        float $baseMetabolicRate = null,
        float $totalMetabolicRate = null
    ) {
        $this->weight = $weight;
        $this->height = $height;
        $this->bodyFatPercentage = $bodyFatPercentage;
        $this->waistHipsRatio = $waistHipsRatio;
        $this->sex = $sex;
        $this->baseMetabolicRate = $baseMetabolicRate;
        $this->totalMetabolicRate = $totalMetabolicRate;
    }


}
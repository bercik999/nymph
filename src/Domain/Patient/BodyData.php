<?php


namespace Domain\Patient;


class BodyData
{
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
     * BodyData constructor.
     * @param float $weight
     * @param float $height
     * @param float $bodyFatPercentage
     * @param float $waistHipsRatio
     */
    public function __construct(
        float $weight = null,
        float $height = null,
        float $bodyFatPercentage = null,
        float $waistHipsRatio = null
    ) {
        $this->weight = $weight;
        $this->height = $height;
        $this->bodyFatPercentage = $bodyFatPercentage;
        $this->waistHipsRatio = $waistHipsRatio;
    }


}
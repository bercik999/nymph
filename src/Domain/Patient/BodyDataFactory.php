<?php


namespace Domain\Patient;


class BodyDataFactory
{
    /**
     * @var \DateTime
     */
    protected $dateToCalculateAge;

    /**
     * BodyDataFactory constructor.
     * @param \DateTime $dateToCalculateAge
     */
    public function __construct(\DateTime $dateToCalculateAge)
    {
        $this->dateToCalculateAge = $dateToCalculateAge;
    }

    public function create(
        float $weight,
        float $height,
        $sex,
        \DateTime $dateOfBirth,
        float $activityRatio,
        float $bodyFatPercentage = null,
        float $waistToHipsRatio = null
    ) {
        $age = $this->dateToCalculateAge->diff($dateOfBirth, true)->y;
        $calc = new BaseMetabolicRateCalc();
        $BMR = $calc->calculate($weight, $height, $age, $sex);
        return new BodyData($weight, $height, $bodyFatPercentage, $waistToHipsRatio, $sex, $BMR, $BMR * $activityRatio);
    }

}
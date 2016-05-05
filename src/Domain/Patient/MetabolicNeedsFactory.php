<?php


namespace Domain\Patient;


use Symfony\Component\Validator\Constraints\Date;

class MetabolicNeedsFactory
{
    /**
     * @var BaseMetabolicRateCalc
     */
    protected $BMRCalculator;
    /**
     * @var \DateTime
     */
    private $now;

    /**
     * MetabolicNeedsFactory constructor.
     * @param BaseMetabolicRateCalc $BMRCalculator
     * @param \DateTime $now
     */
    public function __construct(BaseMetabolicRateCalc $BMRCalculator, \DateTime $now)
    {
        $this->BMRCalculator = $BMRCalculator;
        $this->now = $now;
    }

    public function create(float $weight, float $height, \DateTime $birthDate, int $sex, float $activityRate)
    {
        $age = $this->now->diff($birthDate, true)->y;
        $bmr = $this->BMRCalculator->calculate($weight, $height, $age, $sex);
        return new MetabolicNeeds($bmr, $bmr * $activityRate);
    }


}
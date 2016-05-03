<?php


namespace Domain\Patient;


class MetabolicNeedsFactory
{
    /**
     * @var BaseMetabolicRateCalc
     */
    protected $BMRCalculator;

    /**
     * MetabolicNeedsFactory constructor.
     * @param BaseMetabolicRateCalc $BMRCalculator
     */
    public function __construct(BaseMetabolicRateCalc $BMRCalculator)
    {
        $this->BMRCalculator = $BMRCalculator;
    }

    public function create(float $weight, float $height, int $age, int $sex, float $activityRate)
    {
        $bmr = $this->BMRCalculator->calculate($weight, $height, $age, $sex);
        return new MetabolicNeeds($bmr, $bmr * $activityRate);
    }


}
<?php


namespace Domain\Diet;


class Diet
{
    protected $patientUUID;
    protected $dietUUID;
    protected $calories;
    protected $macronutrientsPie;

    public function __construct(string $patientUUID, string $dietUUID)
    {
        $this->patientUUID = $patientUUID;
        $this->dietUUID = $dietUUID;
    }

    public function assumeCaloriesIntake(int $calories)
    {
        $this->calories = $calories;
    }

    public function macronutrientsShare(float $fatsShare, float $carbohydratesShare, float $proteinsShare)
    {
        $this->macronutrientsPie = new MacronutrientsPie($fatsShare, $carbohydratesShare, $proteinsShare);
    }
    
}
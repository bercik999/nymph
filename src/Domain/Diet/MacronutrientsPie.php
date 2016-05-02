<?php


namespace Domain\Diet;


use Domain\Diet\Exceptions\MacronutrientsPieException;

class MacronutrientsPie
{
    /**
     * @var float
     */
    protected $fats;
    /**
     * @var float
     */
    protected $carbohydrates;
    /**
     * @var float
     */
    protected $proteins;

    public function __construct(float $fats, float $carbohydrates, float $proteins)
    {
        if(($fats + $carbohydrates + $proteins) !== 1.0){
            throw new MacronutrientsPieException('Macronutrients shares must sum to 1');
        }
        $this->fats = $fats;
        $this->carbohydrates = $carbohydrates;
        $this->proteins = $proteins;
    }

    /**
     * @return float
     */
    public function fats()
    {
        return $this->fats;
    }

    /**
     * @return float
     */
    public function carbohydrates()
    {
        return $this->carbohydrates;
    }

    /**
     * @return float
     */
    public function proteins()
    {
        return $this->proteins;
    }
    
    
}
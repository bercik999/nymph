<?php


namespace Domain\Patient;


class MetabolicNeeds
{
    /**
     * @var int
     */
    protected $BMR;
    /**
     * @var int;
     */
    protected $TMR;

    /**
     * MetabolicNeeds constructor.
     * @param int $BMR
     * @param int $TMR
     */
    public function __construct(int $BMR, int $TMR)
    {
        $this->BMR = $BMR;
        $this->TMR = $TMR;
    }
    
}
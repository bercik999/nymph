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
    public function __construct(int $BMR = null, int $TMR = null)
    {
        $this->BMR = $BMR;
        $this->TMR = $TMR;
    }
    
}
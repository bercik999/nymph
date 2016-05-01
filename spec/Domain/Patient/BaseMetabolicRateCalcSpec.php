<?php


namespace spec\Domain\Patient;

use Domain\Patient\BodyData;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BaseMetabolicRateCalcSpec extends ObjectBehavior
{
    public function it_should_correctly_calculate_value_for_female()
    {
        $this->calculate(80, 185, 23, BodyData::FEMALE)->shouldBeEqualTo(1680);
    }

    public function it_should_correctly_calculate_value_for_male()
    {
        $this->calculate(80, 185, 23, BodyData::MALE)->shouldBeEqualTo(1846);
    }
}
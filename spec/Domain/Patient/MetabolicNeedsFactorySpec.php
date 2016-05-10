<?php


namespace spec\Domain\Patient;

use Domain\Patient\BaseMetabolicRateCalc;
use Domain\Patient\BodyData;
use Domain\Patient\MetabolicNeeds;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MetabolicNeedsFactorySpec extends ObjectBehavior
{
    public function let(BaseMetabolicRateCalc $calc)
    {
        $calc->calculate(80, 185, 23, BodyData::FEMALE)->willReturn(1000);
        $this->beConstructedWith($calc, new \DateTime('2016-12-01'));
    }

    public function it_should_create_correct_object()
    {
        $this->create(80, 185, new \DateTime('1993-06-01'), BodyData::FEMALE, 2)->shouldBeLike(new MetabolicNeeds(1000, 2000));
    }
}
<?php


namespace spec\Domain\Patient;

use Domain\Patient\BodyData;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BodyDataSpec extends ObjectBehavior
{
    public function it_is_initializable_with_no_args()
    {
        $this->shouldHaveType(BodyData::class);
    }

    public function it_is_initializable_with_all_args()
    {
        $this->beConstructedWith(10, 30, 0.2, new \DateTime(), 0.4,1);
        $this->shouldHaveType(BodyData::class);
    }

    public function it_should_have_basic_data_if_needed()
    {
        $this->beConstructedWith(100, 30, 0.2, new \DateTime());
        $this->shouldHaveType(BodyData::class);
        $this->hasBasicData()->shouldReturn(true);
    }

    public function it_should_not_have_basic_data()
    {
        $this->shouldHaveType(BodyData::class);
        $this->hasBasicData()->shouldReturn(false);
    }
}
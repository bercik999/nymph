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
        $this->beConstructedWith(10, 30, 0.2, 2);
        $this->shouldHaveType(BodyData::class);
    }

    public function it_is_initializable_without_weight()
    {
        $this->beConstructedWith(null, 30, 0.2, 2);
        $this->shouldHaveType(BodyData::class);
    }

    public function it_is_initializable_without_height()
    {
        $this->beConstructedWith(100, null, 0.2, 2);
        $this->shouldHaveType(BodyData::class);
    }

    public function it_is_initializable_without_body_fat()
    {
        $this->beConstructedWith(100, 30, null, 0.2);
        $this->shouldHaveType(BodyData::class);
    }

    public function it_is_initializable_without_whr()
    {
        $this->beConstructedWith(100, 30, 0.2, null);
        $this->shouldHaveType(BodyData::class);
    }
}
<?php


namespace spec\Domain\Diet;

use Domain\Diet\Exceptions\MacronutrientsPieException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MacronutrientsPieSpec extends ObjectBehavior
{
    public function it_should_throw_exception_when_shares_to_low()
    {
        $fats = 0.1;
        $proteins = 0.1;
        $carbohydrates = 0.1;
        $this->shouldThrow(MacronutrientsPieException::class)->during('__construct', [$fats, $carbohydrates, $proteins]);
    }
    
    public function it_should_throw_exception_when_shares_to_high()
    {
        $fats = 11;
        $proteins = 0.1;
        $carbohydrates = 0.1;
        $this->shouldThrow(MacronutrientsPieException::class)->during('__construct', [$fats, $carbohydrates, $proteins]);
    }

    public function it_should_return_correct_values()
    {
        $fats = 0.5;
        $proteins = 0.3;
        $carbohydrates = 0.2;
        $this->beConstructedWith($fats, $carbohydrates, $proteins);
        $this->fats()->shouldReturn($fats);
        $this->proteins()->shouldReturn($proteins);
        $this->carbohydrates()->shouldReturn($carbohydrates);
    }
    
    
}
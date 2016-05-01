<?php


namespace spec\Domain\Patient;

use DateTime;
use Domain\Patient\BodyData;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BodyDataFactorySpec extends ObjectBehavior
{
    public function it_should_return_correct_data_if_all_needed_provided()
    {
        $this->beConstructedWith(new DateTime("2016-05-01"));
        $weight = 80;
        $height = 185;
        $sex = BodyData::FEMALE;
        $dateOfBirth = new DateTime("1992-06-26");
        $expectedBodyData = new BodyData(80, 185, null, null, BodyData::FEMALE, 1680, 1680);
        $this->create($weight, $height, $sex, $dateOfBirth, 1)->shouldBeLike($expectedBodyData);
    }
}
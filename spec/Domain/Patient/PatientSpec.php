<?php


namespace spec\Domain\Patient;

use Domain\Patient\BodyData;
use Domain\Patient\PersonalData;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PatientSpec extends ObjectBehavior
{
    public function it_should_be_created_with_needed_data(PersonalData $personalData, BodyData $bodyData)
    {
        $uuid = '123';
        $notes = 'ala ma kota';
        $this->beConstructedWith($uuid, $personalData, $bodyData, $notes);
    }
}
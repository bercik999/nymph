<?php

namespace spec\Domain\Patient;

use Domain\Patient\BodyData;
use Domain\Patient\PersonalData;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PatientSpec extends ObjectBehavior
{
    public function it_is_initializable_with_correct_args(PersonalData $personalData, BodyData $bodyData)
    {
        $notes = 'Ala ma kota';
        $this->beConstructedWith($personalData, $bodyData, $notes);
        $this->shouldHaveType(PersonalData::class);
    }

}
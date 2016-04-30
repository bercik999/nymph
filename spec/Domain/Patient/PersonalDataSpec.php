<?php


namespace spec\Domain\Patient;

use Domain\Patient\PersonalData;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonalDataSpec extends ObjectBehavior
{
    public function it_is_initializable_with_no_args()
    {
        $this->shouldHaveType(PersonalData::class);
    }

    public function it_is_initializable_with_all_args()
    {
        $this->beConstructedWith('Firstname', 'Lastname', '+48123456789', 'email');
        $this->shouldHaveType(PersonalData::class);
    }

}
<?php


namespace spec\Domain\Diet;

use Domain\Diet\Diet;
use Domain\Patient\PatientRepoInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DietSpec extends ObjectBehavior
{
    public function it_should_has_patient_assigned(PatientRepoInterface $patientRepo)
    {
        $patientRepo->patientExists('1')->willReturn(true);
        $this->beConstructedWith('1','1');
        $this->shouldHaveType(Diet::class);
    }   
}
<?php


namespace spec\Application\Handlers;

use Application\Commands\CreatePatientCommand;
use Domain\Patient\Patient;
use Domain\Patient\PatientRepoInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreatePatientCommandHandlerSpec extends ObjectBehavior
{
    public function let(PatientRepoInterface $patientRepo)
    {
        $this->beConstructedWith($patientRepo);
    }

    public function it_should_save_patient(PatientRepoInterface $patientRepo)
    {
        $patientRepo->save(Argument::type(Patient::class))->shouldBeCalled();
        $command = new CreatePatientCommand();
        $command->uuid = 'valid_uuid';
        $this->handle($command);
    }
}
<?php


namespace Application\Handlers;


use Application\Commands\CreatePatientCommand;
use Domain\Patient\BaseMetabolicRateCalc;
use Domain\Patient\BodyData;
use Domain\Patient\MetabolicNeeds;
use Domain\Patient\MetabolicNeedsFactory;
use Domain\Patient\Patient;
use Domain\Patient\PatientRepoInterface;
use Domain\Patient\PersonalData;

class CreatePatientCommandHandler
{
    /**
     * @var PatientRepoInterface
     */
    protected $patientsRepo;

    /**
     * CreatePatientCommandHandler constructor.
     * @param PatientRepoInterface $patientsRepo
     */
    public function __construct(PatientRepoInterface $patientsRepo)
    {
        $this->patientsRepo = $patientsRepo;
    }

    public function handle(CreatePatientCommand $command)
    {
        $bodyData = new BodyData(
            $command->weight,
            $command->height,
            $command->sex,
            $command->birthDate,
            $command->bodyFat,
            $command->waistHipsRatio
        );
        $personalData = new PersonalData($command->firstName, $command->lastName, $command->phone, $command->email);
        if($bodyData->hasBasicData()){
            $metabolicNeedsFactory = new MetabolicNeedsFactory(new BaseMetabolicRateCalc(), new \DateTime());
            $metabolicNeeds = $metabolicNeedsFactory->create(
                $command->weight,
                $command->height,
                $command->birthDate,
                $command->sex,
                $command->activityRatio
            );
        } else {
            $metabolicNeeds = new MetabolicNeeds(null, null);
        }
        $patient = new Patient($command->uuid, $personalData, $bodyData, $metabolicNeeds, $command->notes);
        $this->patientsRepo->save($patient);
    }


}
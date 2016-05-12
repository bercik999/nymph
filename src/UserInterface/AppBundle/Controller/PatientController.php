<?php


namespace UserInterface\AppBundle\Controller;


use Application\Commands\CreatePatientCommand;
use Domain\Patient\BodyData;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class PatientController extends Controller
{
    public function newAction(Request $request)
    {
        $command = new CreatePatientCommand();
        $command->uuid = $this->get('nymph.uuid_generator')->createUUID();

        $form = $this->createFormBuilder($command)
            ->add('firstName', TextType::class, ['required' => false])
            ->add('lastName', TextType::class, ['required' => false])
            ->add('email', EmailType::class, ['required' => false])
            ->add('phone', TextType::class, ['required' => false])
            ->add('height', NumberType::class, ['required' => false])
            ->add('birthDate', BirthdayType::class, ['required' => false])
            ->add('sex', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'female' => BodyData::FEMALE,
                    'male' => BodyData::MALE,
                ]
            ])
            ->add('bodyFat', NumberType::class, ['required' => false])
            ->add('waistHipsRatio', NumberType::class, ['required' => false])
            ->add('activityRatio', NumberType::class, ['required' => false])
            ->add('notes',TextareaType::class , ['required' => false])
            ->add('save', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
            $this->get('nymph.command_bus')->handle($command);

        return $this->render('new_patient.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
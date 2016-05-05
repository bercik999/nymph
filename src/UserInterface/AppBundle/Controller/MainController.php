<?php


namespace UserInterface\AppBundle\Controller;


use Application\Commands\CreatePatientCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
        $command = new CreatePatientCommand();
        $command->uuid = 'keke';
        $this->get('nymph.command_bus')->handle($command);
        return new Response();
    }
}
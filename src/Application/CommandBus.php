<?php


namespace Application;


use League\Tactician\CommandBus as BaseCommandBus;

class CommandBus
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    public function __construct(BaseCommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @param $command
     */
    public function handle($command)
    {
        $this->commandBus->handle($command);
    }

}
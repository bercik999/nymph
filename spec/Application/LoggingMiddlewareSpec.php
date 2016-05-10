<?php


namespace spec\Application;

use Infrastructure\CommandLoggerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LoggingMiddlewareSpec extends ObjectBehavior
{
    public function let(CommandLoggerInterface $logger)
    {
        $this->beConstructedWith($logger);
    }

    public function it_should_send_message_to_logger(CommandLoggerInterface $logger, \stdClass $command)
    {
        $next = function (){};
        $logger->log($command)->shouldBeCalled();
        $this->execute($command, $next);
    }
}
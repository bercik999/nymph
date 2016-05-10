<?php


namespace Application;


use Infrastructure\CommandLoggerInterface;
use League\Tactician\Middleware;

class LoggingMiddleware implements Middleware
{
    /**
     * @var CommandLoggerInterface
     */
    protected $logger;

    /**
     * LoggingMiddleware constructor.
     * @param CommandLoggerInterface $logger
     */
    public function __construct(CommandLoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    /**
     * @param object $command
     * @param callable $next
     *
     * @return mixed
     */
    public function execute($command, callable $next)
    {
        $this->logger->log($command);
        $return = $next($command);
        return $return;
    }
}
<?php


namespace Infrastructure;


interface CommandLoggerInterface
{
    public function log($command);
}
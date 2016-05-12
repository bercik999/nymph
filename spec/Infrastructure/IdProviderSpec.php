<?php


namespace spec\Infrastructure;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IdProviderSpec extends ObjectBehavior
{
    const UUIDv4_REGEX = /** @lang RegExp */
        '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';
    
    public function it_should_return_correct_uuid()
    {
        $this->createUUID()->shouldMatch(self::UUIDv4_REGEX);
    }
}
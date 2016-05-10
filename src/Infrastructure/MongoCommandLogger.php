<?php


namespace Infrastructure;


use Doctrine\Common\Collections\Collection;
use Doctrine\MongoDB\Connection;

class MongoCommandLogger implements CommandLoggerInterface
{
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * MongoCommandLogger constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $db = $connection->selectDatabase('nymph');
        $this->collection = $db->createCollection('logs');
    }


    public function log($command)
    {
        $document = (array)$command;
        $this->collection->insert($document);
    }
}
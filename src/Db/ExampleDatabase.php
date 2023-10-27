<?php

namespace YourNameSpaceGoesHere\Db;

use PhoenixPhp\Database\BaseDb;

class ExampleDatabase extends BaseDb
{
    public function __construct()
    {
        parent::__construct('example-database');
    }
}
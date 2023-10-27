<?php

namespace YourNameSpaceGoesHere\Db\ExampleDatabase;

use PhoenixPhp\Database\BaseModel;
use PhoenixPhp\Core\ErrorCollector;

class Example extends BaseModel
{

    //---- CONSTANTS

    const KEYS = [
        'PK' => 'id'
    ];


    //---- MEMBERS

    private int $id;


    //---- SETTERS

    public function setId(int $val): void
    {
        $this->id = $val;
    }

    //---- GETTERS

    public function getId(): int
    {
        return $this->id;
    }

    //---- VALIDATION

    public function checkFields(): bool
    {
        $return = true;

        if ($this->validateInt($this->getId()) === false) {
            ErrorCollector::putErrorMessage('id');
            $return = false;
        }
        
        return $return;
    }

}

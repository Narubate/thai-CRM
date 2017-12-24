<?php
namespace App\Models\Example;

use App\Models\BaseModel;

class TestModel extends BaseModel
{
    /**
     * connect db
     */
        protected $connection = 'mongodb';

    /**
     * collection mongo
     */
    protected $collection = 'test';

    public function test()
    {
        return $this->get();
    }
}
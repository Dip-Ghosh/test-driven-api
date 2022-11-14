<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ToDoList extends TestCase
{

    public function test_store_todo_list()
    {

        //preparation /prepare

        //action /perform
        $response = $this->getJson(route('todo_list.store'));

        //assertion /predict
        $this->assertEquals(1,count($response->json()));

    }
}

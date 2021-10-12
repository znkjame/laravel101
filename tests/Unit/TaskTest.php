<?php

namespace Tests\Unit;

use App\Models\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_isPast()
    {
        $task = new Task();
        $task->due_date = "2021-10-11";


    }
}

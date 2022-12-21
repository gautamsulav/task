<?php

namespace App\Actions;

use App\Models\Task;

class TaskAction
{
    public function execute(Task $task, string $status): void
    {
        $task->update(['status' => $status]);
    }
}

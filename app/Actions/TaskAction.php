<?php

namespace App\Actions;

class TaskAction
{
    public function execute(Task $task, string $status): void
    {
        $task->update(['status' => $status]);
    }
}

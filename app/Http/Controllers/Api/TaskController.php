<?php

namespace App\Http\Controllers\Api;

use App\Actions\TaskAction;
use App\Enums\TaskStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public TaskAction $taskAction;

    public function __construct()
    {
        $this->taskAction = new TaskAction();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TaskRequest $request
     * @return Response
     */
    public function store(TaskRequest $request): Response
    {
        return Task::create($request->toArray() + ['user_id' => Auth::user()->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return Task
     */
    public function show(Task $task): Task
    {
        return $task->load(['createdBy']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return Task
     */
    public function update(Request $request, Task $task): Task
    {
        $task->update($request->all());
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return JsonResponse
     */
    public function destroy(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json([
            'message' => 'Successfully Deleted Task',
        ]);
    }

    /**
     * @param Task $task
     * @return JsonResponse
     */
    public function markCompleted(Task $task): JsonResponse
    {
        $this->taskAction->execute($task, TaskStatus::COMPLETED);

        return response()->json([
            'message' => 'Task Completed Successfully',
        ]);
    }

    /**
     * @param Task $task
     * @return JsonResponse
     */
    public function markClosed(Task $task): JsonResponse
    {
        $this->taskAction->execute($task, TaskStatus::CLOSED);

        return response()->json([
            'message' => 'Task Closed Successfully',
        ]);
    }
}

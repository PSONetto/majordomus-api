<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Assignee;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::with(['assignees', 'priority', 'status'])->get();
    }

    public function store(Request $request)
    {
        $assignees = $request->input('assignee');

        $task = Task::create($request->all());

        foreach ($assignees as $assigneeId) {
            $assignee = Assignee::findOrFail($assigneeId);
            $task->assignees()->attach($assignee->id);
        }

        return $task;
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return $task;
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return ['message' => 'Task deleted successfully'];
    }
}

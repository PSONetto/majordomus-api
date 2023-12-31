<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Assignee;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->input('user_id');
        return Task::with(['assignees', 'priority', 'status'])->get()->where('user_id', $user);
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());

        $assignees = $request->input('assignee');

        foreach ($assignees as $assigneeId) {
            $assignee = Assignee::findOrFail($assigneeId);
            $task->assignees()->attach($assignee->id);
        }

        return $task;
    }

    public function show($id)
    {
        return Task::with(['assignees', 'priority', 'status'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        $assignees = $request->input('assignee');

        if (!empty($assignees)) {
            $task->assignees()->detach();

            foreach ($assignees as $assigneeId) {
                $assignee = Assignee::findOrFail($assigneeId);

                $task->assignees()->attach($assignee->id);
            }
        }

        return $task;
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->assignees()->detach();
        $task->delete();

        return ['message' => 'Task deleted successfully'];
    }
}

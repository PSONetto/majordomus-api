<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function index()
    {
        return Priority::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return Priority::create($validatedData);
    }

    public function show($id)
    {
        return Priority::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $assignee = Priority::findOrFail($id);
        $assignee->update($request->all());
        return $assignee;
    }

    public function destroy($id)
    {
        $assignee = Priority::findOrFail($id);
        $assignee->delete();
        return ['message' => 'Task deleted successfully'];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Assignee;
use Illuminate\Http\Request;

class AssigneeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->input('user_id');
        return Assignee::all()->where('user_id', $user);
    }

    public function store(Request $request)
    {
        return Assignee::create($request->all());
    }

    public function show($id)
    {
        return Assignee::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $assignee = Assignee::findOrFail($id);
        $assignee->update($request->all());
        return $assignee;
    }

    public function destroy($id)
    {
        $assignee = Assignee::findOrFail($id);
        $assignee->tasks()->detach();
        $assignee->delete();

        return ['message' => 'Assignee deleted successfully'];
    }
}

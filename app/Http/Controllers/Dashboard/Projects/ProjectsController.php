<?php

namespace App\Http\Controllers\Dashboard\Projects;

use App\Http\Controllers\Controller;
use App\Model\Projects;
use App\User;
use Illuminate\Http\Request;

class ProjectsController extends Controller {
    public function index() {
        $Projects = Projects::orderBy('id', 'desc')->paginate(20);
        return view('admin.projects.index', compact('Projects'));
    }

    public function edit($id) {
        $Project = Projects::find($id);

        return view('admin.projects.edit', compact('Project'));
    }

    public function destroy(Request $request) {
        foreach ($request->delete_item as $key => $item) {
            Projects::where('id', $key)->delete();
        }

        return redirect('/dashboard/projects')->with('notification', [
            'class' => 'success',
            'message' => 'Items deleted.'
        ]);
    }
}

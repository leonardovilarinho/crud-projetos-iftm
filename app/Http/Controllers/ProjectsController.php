<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects = Project::all();
    	return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
    	$project = Project::find($id);
    	return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create( $request->all() );

        return redirect('projects');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        Project::find($id)->update( $request->all() );

        return redirect('projects');
    }

    public function delete(Request $request, $id)
    {
        Project::destroy($id);

        return redirect('projects');
    }
}

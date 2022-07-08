<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

use function GuzzleHttp\describe_type;
use function Psy\debug;

class ProjectController extends Controller
{
    /**
     * Display a listing of the Projects of PORTAFOLIO.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }


    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index');


        #Project::create([
        #'title' => $request->title,
        #'url' => $request->url,
        #'description' => #$request->description,
        #]);
        #$fields = request()->validate([
        #    'title' => 'required',
        #    'url' => 'required',
        #    'description' => 'required',
        #]);

        #  Project::create(request()->only('title', 'url', 'description'));

    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project);
    }
}

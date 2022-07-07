<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

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


    public function store(Request $request)
    {
        # return Project::create([
        #     'title' => request('title'),
        #     'url' => request('url'),
        #     'description' => request('description'),
        # ]);
        return Project::create([
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
        ]);

        return redirect()->route('projects.index');
    }
}

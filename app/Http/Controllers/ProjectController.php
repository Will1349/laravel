<?php

namespace App\Http\Controllers;

use App\Events\ProjectSaved;
use App\Models\Project;
use function Psy\debug;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use function GuzzleHttp\describe_type;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Category;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the Projects of PORTAFOLIO.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::with('category')->latest()->simplePaginate(6)
        ]);
    }

    #Funcion para Mostrar el proyecto
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    #Funcion para crear proyecto
    public function create()
    {
        return view('projects.create', [
            'project' => new Project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    #Funcion para crear proyecto
    public function store(SaveProjectRequest $request)
    {
        $project = new Project($request->validated());


        $project->image = $request->file('image')->store('images');

        $project->save();
        ProjectSaved::dispatch($project);


        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
    }

    #Funcion para actualizar proyecto
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    #Funcion para actualizar proyecto
    public function update(Project $project, SaveProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();

            ProjectSaved::dispatch($project);
        } else {
            $project->update(array_filter($request->validated()));
        }



        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
    }

    #Funcion para el=kiminar proyecto
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\ProjectSaved;
use http\Env\Request;
use App\Models\Project;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('projects.index', [
            'newProject' => new Project,
            'projects' => Project::latest()->paginate(),
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project,
        ]);
    }

    public function create()
    {
        $this->authorize('create', $project = new Project());

        return view('projects.create', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id'),
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        $project = new Project($request->validated());

        $this->authorize('create', $project);

        $project->image = $request->file('image')->store('images');

        $project->save();

        ProjectSaved::dispatch($project);

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);

        return view('projects.edit', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id'),
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $this->authorize('updtade', $project);

        if ($request->hasFile('image')) {
            Storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();

            ProjectSaved::dispatch($project);
        } else {
            $project->update(array_filter($request->validated()));
        }

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con exito');
    }

    public function destroy(Project $project)
    {
        $this->authorize('delete    ', $project);

        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('projects.index')->with('El proyecto fue eliminado con exito', 'status');
    }
}





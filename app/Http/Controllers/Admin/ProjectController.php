<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        //dd($projects);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('projects.create', compact($types));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $newProject = new Project();
        $newProject->titolo = $data['titolo'] ?? null;
        $newProject->autore = $data['autore'] ?? null;
        $newProject->categoria = $data['categoria'] ?? null;
        $newProject->contenuto = $data['contenuto'] ?? null;
        $newProject->save();
        //dd($newProject);
        return redirect()->route('projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //dd($project);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("projects.edit", compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->titolo = $data['titolo'];
        $project->autore = $data['autore'];
        $project->categoria = $data['categoria'];
        $project->contenuto = $data['contenuto'];
        $project->update();
        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("projects.index");
    }
}

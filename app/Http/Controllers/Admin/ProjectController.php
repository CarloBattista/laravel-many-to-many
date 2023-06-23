<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Project;
use App\Models\Admin\Type;
use App\Models\Admin\Technology;

use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $projects = Project::all();
        $types = Type::all();
        $technology = Technology::all();

        return view('admin.projects.index', compact(['projects', 'types', 'technology']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::all();
        $types = Type::all();
        $technology = Technology::all();

        return view('admin.projects.create', compact(['project', 'types', 'technology']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_Project = new Project();

        if ($request->hasFile('project_image')) {

            $imagePath = Storage::disk('public')->put('project_images', $request->project_image);

            $form_data['project_image'] = $imagePath;
        }

        $new_Project->fill($form_data);

        $new_Project->save();


        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        
        return view('admin.projects.show', compact(['project']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $types = Type::all();
        $technology = Technology::all();

        return view('admin.projects.edit', compact(['project', 'types', 'technology']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $form_data = $request->all();

        if ($request->hasFile('project_image')) {

            if( $project->project_image ){
                Storage::delete($project->project_image);
            }

            $imagePath = Storage::disk('public')->put('project_images', $request->project_image);

            $form_data['project_image'] = $imagePath;
        }

        $project->update($form_data);

        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        if ($project->project_image) {
            Storage::delete($project->project_image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}

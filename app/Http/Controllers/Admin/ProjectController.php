<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
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
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {
        $image = $request->file('image')->store('public/projects');

        $project = Project::create([
          'name' => $request->name,
          'slug'=> $request->slug,
          'description' => $request->description,
          'image' => $image,
          'link' => $request->link,
        ]);
        
        if($request->has('categories')) {
          	$project->categories()->attach($request->categories);
        } 
      
        return to_route('admin.projects.index');
    }


    public function show(Project $project)
    {
        return view('projects.show', [
          'project' => $project
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
      $categories = Category::all();
      return view('admin.projects.edit', compact('project','categories'));
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
        $request->validate([
          'name'=> 'required',
          'description'=>'required',
          'link'=>'required'
        ]);

        $image = $project->image; 
        if($request->hasFile('image')) {
          Storage::delete($project->image);
          $image = $request->file('image')->store('public/projects');
        }

        $project->update([
          'name'=>$request->name,
          'slug'=>$request->slug,
          'description'=>$request->description,
          'image'=>$image,
          'link'=>$request->link,
        ]);

		// dd($request->categories);
        if($request->has('categories')) {
			// dd($project->categories);
          	$project->categories()->sync($request->categories);
        } 

        return to_route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
      Storage::delete($project->image);
      $project->categories()->detach();  
      $project->delete();
      return to_route('admin.projects.index');
    }
}

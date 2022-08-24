<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectResource;

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
        return response([
            'projects' => ProjectResource::collection($projects),
            'message' => 'Retrieved Successfully'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name'          => 'required',
            'budget'        => 'required|integer',
            'start_date'    => 'required|date',
            'duration'      => 'required|integer',
            'num_employees' => 'required|integer'
        ]);
            
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'validation Error'
            ]);
        }
        $project = Project::create($data);
        return response([
            'project' => new ProjectResource($project),
            'message' => 'Created Successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return response([
            'project' => new ProjectResource($project),
            'message' => 'Retrieved Successfully'
        ], 200);   
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return response([
            'project' => new ProjectResource($project),
            'message' => 'Updated Successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response([
            'message' => 'Deleted Successfully'
        ]);
    }
}

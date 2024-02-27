<?php

namespace App\Http\Controllers\admin\project;

use App\core\project\ProjectInterface;
use App\Http\Controllers\Controller;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $projectInterface;

    public function __construct(ProjectInterface $projectInterface)
    {
        $this->projectInterface = $projectInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['projects'] = $this->projectInterface->getAllProjects();
        return view('admin.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:500',
        ]);
        $data = $request->only('name', 'image');
        $store =  $this->projectInterface->storeProject($data);
        if ($store) {
            return redirect()->route('projects.index')->with('msg', 'Projects created successfully');
        } else {
            return back()->with('msg', 'Some error occur!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $data['project'] = $this->projectInterface->getSingleProject($slug);
        return view('admin.project.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $data['project'] = $this->projectInterface->getSingleProject($slug);
        return view('admin.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'name' => 'required|string|max:500',
        ]);
        $data = $request->only('name', 'image');
        $store =  $this->projectInterface->updateProject($data, $slug);
        if ($store) {
            return redirect()->route('projects.index')->with('msg', 'Projects updated successfully');
        } else {
            return back()->with('msg', 'Some error occur!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        if($this->projectInterface->deleteProject($slug)){
            return back()->with('msg', 'Project has been deleted successfully');
           }else{
            return back()->with('msg', 'Some error ocur');
           }
    }

    public function deleteImage(Request $request) {
        $find = ProjectImage::where('id', $request->image_id)->first();
        if($find){
            return $find->delete();
                
        }
        return false;
    }
}

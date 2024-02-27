<?php
namespace App\core\project;

use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class ProjectRepository implements ProjectInterface {
    public function storeProject($data){

        $slug = Str::slug($data['name']);
        $slug_count = DB::table('projects')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = $slug . '-' . sha1(1234);
        }
        $data['slug'] = $slug;

        $project_insert = Projects::create($data);


        // if ($project_insert && !empty($dataImage)) {
            return $this->imageUpload($data['image'], $project_insert->id);
        // }

    }

    public function imageUpload($dataImage, $project_id)
    {
        foreach ($dataImage as $image) {
            $content_db = time() . rand(0000, 9999) . "." . $image->getClientOriginalExtension();
            $insert_image = DB::table("project_images")->insert([
                "project_id" => $project_id,
                "image" => $content_db,
                "created_at" => date('Y-m-d H:i:s')
            ]);
            $image->storeAs("public/ProjectImages", $content_db);
        }
        return $insert_image;
    }

    public function getAllProjects(){
        return Projects::with('project_images')->get();
    }

    public function getSingleProject($slug){
        return Projects::with('project_images')->where('slug', $slug)->first();
    }

    public function updateProject($data, $slug) {
        $find = Projects::where('slug', $slug)->first();
        if($find) {
            
            if(!empty($data['image'])){
                 $this->imageUpload($data['image'], $find->id);
            }
            return $find->update($data);
        
        }
        else{
            return false;
        }
    }

    public function deleteProject($slug){
        $pro = Projects::where('slug', $slug)->first();
        if($pro){
            $pro->project_images()->delete();
            return $pro->delete();
        }
        return false;

    }
}
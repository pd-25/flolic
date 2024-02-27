<?php
namespace App\core\project;

interface ProjectInterface {
    public function storeProject($data);
    public function updateProject($data, $slug);
    
    public function deleteProject($slug);
    public function getSingleProject($slug);
    public function getAllProjects();
    
}
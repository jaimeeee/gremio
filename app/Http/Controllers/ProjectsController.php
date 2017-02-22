<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\ProjectCategory;
use App\Http\Requests;

class ProjectsController extends Controller
{
    /**
     * Category
     */
    public function category($category)
    {
        $category = ProjectCategory::where('url', $category)->firstOrFail();
        
        return view('projects', [
                        'category' => $category,
                    ]);
    }
    
    /**
     * Project
     */
    public function project($project)
    {
        $project = Project::where('url', $project)->firstOrFail();
        
        return view('project', [
                        'title' => $project->name,
                        'project' => $project,
                    ]);
    }
}

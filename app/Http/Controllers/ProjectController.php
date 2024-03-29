<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private readonly Collection $allProjects;
    private readonly Collection $ongoingProjects;

    public function __construct()
    {
        $this->allProjects = Project::all();
        $this->ongoingProjects = $this->allProjects->where('finished_at', null);
    }

    public function index()
    {
        return view('pages.project.list', [
            'allProjects' => $this->allProjects,
        ]);
    }

    public function show(string $slug)
    {
        return view('pages.project.details', [
            'testimonials' => Testimonial::all(),
            'project' => $this->allProjects->where('slug', $slug)->first(),
            'allProjects' => $this->allProjects,
            'ongoingProjects' => $this->ongoingProjects,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private readonly Collection $allProjects;
    private readonly Collection $ongoingProjects;

    public function __construct()
    {
        $this->allProjects = Project::all();
        $this->ongoingProjects = $this->allProjects->where('finished_at', null);
    }

    public function construction()
    {
        return view('pages.service.construction', [
            'allProjects' => $this->allProjects,
            'ongoingProjects' => $this->ongoingProjects,
        ]);
    }

    public function distribution()
    {
        return view('pages.service.distribution', [
            'allProjects' => $this->allProjects,
            'ongoingProjects' => $this->ongoingProjects,
        ]);
    }

    public function export()
    {
        return view('pages.service.export');
    }

    public function battery()
    {
        return view('pages.service.battery', [
            'photos' => Photo::all(),
            'testimonials' => Testimonial::all(),
        ]);
    }
}

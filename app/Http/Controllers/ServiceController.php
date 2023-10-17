<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function construction()
    {
        return view('pages.service.construction');
    }

    public function distribution()
    {
        return view('pages.service.distribution');
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

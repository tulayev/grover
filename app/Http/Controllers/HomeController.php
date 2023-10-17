<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'testimonials' => Testimonial::all(),
            'members' => Member::all(),
        ]);
    }
}

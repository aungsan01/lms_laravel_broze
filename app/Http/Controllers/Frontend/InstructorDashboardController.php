<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorDashboardController extends Controller
{
    function index(): View{
        return view ('instructor.dashboard');
    }
}

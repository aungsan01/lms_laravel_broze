<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    function index(): View {
        return view('dashboard');
    }
}

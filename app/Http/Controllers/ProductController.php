<?php

namespace App\Http\Controllers;

use App\Models\SolarPanel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request): Response
    {
        return response()->view('index', ['products' => SolarPanel::all(), 'user' => Auth::user()]);
    }
}

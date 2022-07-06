<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the Projects of PORTAFOLIO.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio', [
            'projects'=>Project::latest()->paginate()
            ]);
    }
}

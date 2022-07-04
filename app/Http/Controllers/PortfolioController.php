<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the Projects of PORTAFOLIO.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = [
            ['title' => 'Project #1'],
            ['title' => 'Project #2'],
            ['title' => 'Project #3'],
            ['title' => 'Project #4'],
        ];
        return view('portfolio', compact('portfolio'));
    }
}

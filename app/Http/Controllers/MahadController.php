<?php

namespace App\Http\Controllers;

use App\User;
use App\Mahad;
use App\Program;

use Illuminate\Http\Request;

class MahadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Mahad $mahad)
    {
        $programs = $mahad->programs;
        return view('programs.index', compact('programs', 'mahad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}

<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Mahad;
use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mahad $mahad)
    {
        // $data['programs'] = $mahad->programs()->paginate(10);
        // return view('programs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mahad $mahad)
    {
        return view('programs.create', [
            'mahad_id' => $mahad->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Mahad $mahad, Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 
            'status' => 'required',
        ]);
        
        $mahad->programs()->create($data);
        return redirect()->route('mahad.show', [$mahad->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Mahad $mahad, Program $program)
    {
        $classrooms = $program->classrooms;
        $header = ['No', 'Kelas', 'Deskripsi', 'Aksi'];
        return view('classrooms.index', compact('classrooms', 'program', 'header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Program::find($id);
        return view('programs.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($mahad, $program)
    {
        $program = Program::find($program)->delete();


        return redirect()->back()->with('success', 'Program deleted successfully');
    }
}
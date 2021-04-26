<?php

namespace App\Http\Controllers;
use App\Classroom;
use App\Mahad;
use App\Program;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Program $program)
    {
        return view('classrooms.create', [
            'program_id' => $program->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Program $program, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
        
        $program->classrooms()->create($data);


        return redirect()->route('program.show', ['mahad'=>$program->mahad_id, 'program'=>$program->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program, Classroom $classroom)
    {
        $meetings = $classroom->meetings;
        $header = ['No', 'Nama', 'Aksi'];
        return view('templates.table1', compact('header', 'classroom', 'meetings', 'program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program, Classroom $classroom)
    {
        return view('classrooms.edit', ['classroom'=>$classroom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Program $program, Classroom $classroom, Request $request)
    {
        $classroom->update([
            'name'=>$request->name,
            'detail'=>$request->detail
        ]);

        return redirect()->route('program.show', ['mahad'=>$program->mahad_id, 'program'=>$program->id]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program, Classroom $classroom)
    {
        $classroom->delete();

        return redirect(route('program.show', ['mahad'=>$program->mahad_id, 'program'=>$program->id]));
    }
}
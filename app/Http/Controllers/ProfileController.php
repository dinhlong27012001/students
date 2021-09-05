<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $StId = $request->session()->get('StId');
        $students = Student::join('classes', 'students.StClass', '=', 'classes.cId')->where('students.StId', '=', $StId)->first();
        return view('student.index', [
            "students" => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $StName = $request->get('StName');
        $StEmail = $request->get('StEmail');
        $StPassword = $request->get('StPassword');
        $StNum  = $request->get('StNum	');
        $StDoB = $request->get('StDoB');
        $classes = $request->get('cId');
        $students = new Student();
        $students->lastName = $StName;
        $students->email = $StEmail;
        $students->passWord = $StPassword;
        $students->phone = $StNum;
        $students->DoB = $StDoB;
        $students->cId = $classes;
        $students->save();
        return Redirect::route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $StId = $request->session()->get('StId');


        $students = Student::join('classes', 'students.StClass', '=', 'classes.cId')
            ->where('students.StId', '=', $StId)->first();
        return view('student.edit', [
            "students" => $students
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $StId)
    {
        $students = Student::find($StId);
        $students->StName = $request->get('StName');
        $students->StEmail = $request->get('StEmail');
        $students->StPassword = $request->get('StPassword');
        $students->StNum = $request->get('StNum');
        $students->StDoB = $request->get('StDoB');
        $students->save();
        return Redirect::route('student.index');
        return dd($students);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

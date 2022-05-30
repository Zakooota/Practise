<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class studentController extends Controller
{
 
    public function __construct()
    {
       // $this->middleware('main');
    }
    public function index()
    {
        $student=Student::all();
        return view('students.index',compact('student'));
    }
    public function show(Student $student)
    {
        //$students = Student::all();
        return view('students.show',compact('student'));
              
    }
     public function create()
     {
         $student=new Student();
         return view('students.create',compact('student'));

     } 

    public function edit(Student $student)
    {
        //$students = Student::all();
        return view('students.edit',compact('student'));
              
    }
    public function update(Student $student)
    {
        //$students = Student::all();
        $student->update($this->valiRequest());
        return redirect('/students/' . $student->id);
              
    }



    public function store()
    {
     
        Student::create($this->valiRequest());
        return redirect('/students/index');

    }

    private function valiRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
             'email' => 'required|email',
             'address' => 'required',
             'program' => 'required',
        ]);


    }
}

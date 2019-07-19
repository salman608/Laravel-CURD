<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use validate;

class StudentController extends Controller
{
    public function index(){
      $students=Student::all();
      return view('welcome',compact('students'));
    }


    ////




    ////

    public function create(){
      return view('create');
    }


        public function store(Request $request){
          $this->validate($request,[

            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'email'=>'required'
          ]);

          $student=new Student;

          $student->first_name=$request->first_name;
          $student->last_name=$request->last_name;
          $student->phone=$request->phone;
          $student->email=$request->email;
          $student->save();

          return redirect('/')->with('successMsg','Student successfully added');
        }

        public function edit($id){
          $student=Student::find($id);
          return view('edit',compact('student'));
        }
        public function update(Request $request,$id){
          $this->validate($request,[

            'first_name'=>'required',   //validation
            'last_name'=>'required',
            'phone'=>'required',
            'email'=>'required'
          ]);

          $student=Student::find($id);

          $student->first_name=$request->first_name;
          $student->last_name=$request->last_name;
          $student->phone=$request->phone;
          $student->email=$request->email;
          $student->save();

          return redirect('/')->with('successMsg','Student update successfully ');
        }

        public function delete($id){
           Student::find($id)->delete();
           return redirect('/')->with('successMsg','Student Delete successfully ');


        }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequset;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index',compact('students'));
    }
    public function create(){
         return view('student.create');
    }

    public function store(StudentFormRequset $request){

          $data = $request->validated();

          $student = new Student();

          $student->stu_name = $data['stuname'];
          $student->stu_reg_no = $data['sturegnum'];
          $student->stu_address = $data['stuaddress'];
          $student->stu_age = $data['stuage'];

          $student->stu_grade = $request->stugrade;

          if($request->hasfile('stuimage')){
            $file=$request->file('stuimage');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/students/',$filename);
            $student->stu_image=$filename;
          }
          $student->stu_gender = $request->stugender;
          $student->stu_prefered_grade = $request->stuprefgrade;

          $student->save();

          return redirect(route('student.index'))->with('status','Student Added Successfully!');

    }

}

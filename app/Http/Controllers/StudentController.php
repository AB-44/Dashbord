<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function createform(Request $request){
        $form = new student;
        $form->name=$request->name;
        $form->email=$request->email;
        $form->phone=$request->phone;
        $form->img=$request->img;
        $form->class_id=$request->class_id;
        $form->save();
        return response()->json($form);

    }
}

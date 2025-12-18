<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function store(Request $request){
        $Add = new teacher;
        $Add->name=$request->name;
        $Add->email=$request->email;
        $Add->phone=$request->phone;
        $Add->img=$request->img;
        $Add->corse_id=$request->corse_id;
        $Add->save();
        return response()->json($Add);


    }
}

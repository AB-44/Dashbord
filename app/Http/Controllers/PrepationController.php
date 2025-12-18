<?php

namespace App\Http\Controllers;

use App\Models\prepation;
use Illuminate\Http\Request;

class PrepationController extends Controller
{
    public function store(Request $request){
        $Add = new prepation;
        $Add->teachers_id = $request->teachers_id;
        $Add->students_id = $request->students_id;
        $Add->cours_id = $request->cours_id;
        $Add->class_id = $request->class_id;
        $Add->attendance_status=$request->attendance_status;
        $Add->absence_reason = $request->absence_reason;
        $Add->save();
        return response()->json($Add);
    }
}

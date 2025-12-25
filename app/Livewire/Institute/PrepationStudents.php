<?php

namespace App\Livewire\Institute;

use App\Models\cours;
use App\Models\prepation;
use App\Models\student;
use App\Models\student_class;
use Livewire\Component;

class PrepationStudents extends Component
{
    public $prepation_id;
    public $students_id;
    public $cours_id;
    public $class_id;
    public $attendance_status;
    public $absence_reason;

    public function SavePrepationStudent(){
        $this->validate([
            'students_id'=>'required|exists:students,id',
            'cours_id'=>'required|exists:courses,id',
            'class_id'=>'required|exists:student_classes,id',
            'attendance_status'=>'required|string|max:20',
            'absence_reason'=>'required|string|max:255'
        ]);
  prepation::updateOrCreate(
    [
        // الشروط (ابحث عن تحضير لهذا الطالب في هذا الكورس وهذا الفصل)
        'students_id' => $this->students_id,
        'cours_id'    => $this->cours_id,
        'class_id'    => $this->class_id,
    ],
    [

        'attendance_status' => $this->attendance_status,
        'absence_reason'    => $this->absence_reason,
    ]
);
session()->flash('success','The student is registered');
    }
    public function render()
    {
        $students = student::all();
        $courses = cours::all();
        $clases = student_class::all();
        return view('livewire.institute.prepation-students',compact('students','clases','courses'));
    }
}

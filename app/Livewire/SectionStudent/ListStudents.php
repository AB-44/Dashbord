<?php

namespace App\Livewire\SectionStudent;

use App\Models\student;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ListStudents extends Component
{
        public function deleteStudent($id)
    {

        $student = student::find($id);
        if ($student) {
             $student->prepation()->delete();
            if ($student->img) {
                Storage::disk('public')->delete($student->img);
            }

            $student->delete();

        }
    }
    public function render()
    {
        $students = student::with('courses')->get();
        return view('livewire.section-student.list-students',['students'=>$students]);

    }
}

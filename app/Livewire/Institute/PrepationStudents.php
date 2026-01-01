<?php

namespace App\Livewire\Institute;

use App\Models\cours;
use App\Models\student;
use App\Models\prepation;
use Livewire\Component;

class PrepationStudents extends Component
{
    public $cours_id;

    public function mount($coursId = null)
    {

        $this->cours_id = $coursId ?? 1;
    }

    public function saveAttendance($studentId, $status)
    {
        $this->validate([
            'cours_id' => 'required|exists:courses,id',
        ]);

        prepation::updateOrCreate(
            [
                'students_id' => $studentId,
                'cours_id'    => $this->cours_id,
            ],
            [
                'attendance_status' => $status,
            ]
        );

        session()->flash('success', 'Attendance registered!');
    }

    public function render()
    {
        $students = student::whereHas('courses', function ($query) {
            $query->where('cours_id', $this->cours_id);
        })->with('prepation')->get();
        $course = cours::find($this->cours_id);
        $allCourses = cours::all();

        return view('livewire.institute.prepation-students', compact('students','course','allCourses'));
    }
}

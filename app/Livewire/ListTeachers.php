<?php

namespace App\Livewire;

use App\Models\teacher;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ListTeachers extends Component
{

    public function deleteTeacher($id)
    {

        $teacher = teacher::find($id);
        if ($teacher) {
            $teacher->prepation()->delete();
            if ($teacher->img) {
                Storage::disk('public')->delete($teacher->img);

            }
            $teacher->delete();

        }
    }

    public function render()
    {
        $teachers = teacher::with('courses')->get();


        return view('livewire.list-teachers', [
            'teachers' => $teachers
        ]);
    }
}

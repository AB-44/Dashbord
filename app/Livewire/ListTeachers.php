<?php

namespace App\Livewire;

use App\Models\teacher;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ListTeachers extends Component
{


    protected $listeners = ['deleteTeacher', 'editTeacher'];

    public function deleteTeacher($id)
    {

        $teacher = teacher::find($id);
        if ($teacher) {
            if ($teacher->img) {
                Storage::disk('public')->delete($teacher->img);
            }
            $teacher->delete();
            $this->dispatch('teacher-deleted');
        }
    }
    public function editTeacher($id)
{
    // إرسال الحدث لكومبوننت الفورم
    $this->dispatch('openEditTeacher', id: $id);
}

    public function render()
    {
        $teachers = teacher::with('courses')->get();


        return view('livewire.list-teachers', [
            'teachers' => $teachers
        ]);
    }
}

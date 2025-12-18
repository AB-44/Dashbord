<?php

namespace App\Livewire;

use App\Models\teacher;
use Livewire\Component;
use Livewire\Attributes\On; // لاستقبال الحدث من AddTeacher

class ListTeachers extends Component
{

    protected $listeners = ['teacher-added' => '$refresh'];

      #[On('teacher-added')]
      #[On('show-dashboard')]


    public function render()
    {
        // جلب جميع المعلمين لعرضهم في الجدول
        $teachers = teacher::with('courses')->get();


        return view('livewire.list-teachers', [
            'teachers' => $teachers
        ]);
    }
}

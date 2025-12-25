<?php

namespace App\Livewire;

use App\Models\teacher;
use Livewire\Component;


    class EditTeacher extends Component
{
    public $teacherId;
    public $name;
    public $email;
    public $phone;

    protected $listeners = ['openEditTeacher'];

    public function openEditTeacher($id)
    {
        $teacher = teacher::findOrFail($id);

        $this->teacherId = $teacher->id;
        $this->name = $teacher->name;
        $this->email = $teacher->email;
        $this->phone = $teacher->phone;
    }

    public function updateTeacher()
    {
        $teacher = teacher::findOrFail($this->teacherId);

        $teacher->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('success', 'تم التعديل بنجاح');
    }

    public function render()
    {
        return view('livewire.edit-teacher');
    }
}

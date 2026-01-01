<?php

namespace App\Livewire;

use App\Models\cours;
use App\Models\teacher;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTeacherForm extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $phone;
    public $corse_id;
    public $img;
    public $address;
    public $teacher_id;
public function resetForm()
{
    $this->reset();
    $this->teacher_id = null;
}

public function setEditTeacher($data)
{
    $teacher = teacher::findOrFail($data['id']);

    $this->teacher_id = $teacher->id;
    $this->name = $teacher->name;
    $this->email = $teacher->email;
    $this->phone = $teacher->phone;
    $this->address = $teacher->address;
    $this->corse_id = $teacher->corse_id;
}

public function saveTeacher()
{
    $rules = [
        'name'=>'required|string|max:255',
        'email'=>'required|string|max:255',
        'phone'=>'required|digits_between:8,12',
        'corse_id'=>'required|exists:courses,id',
        'address'=>'nullable|string|max:255',
    ];

    if (!$this->teacher_id) {
        $rules['img'] = 'required|image|max:1024';
    } else {
        $rules['img'] = 'nullable|image|max:1024';
    }

    $this->validate($rules);

    $teacher = teacher::find($this->teacher_id);
    $photoPath = $teacher?->img;

    if ($this->img) {
        $photoPath = $this->img->store('teachers_photos', 'public');
    }

    teacher::updateOrCreate(
        ['id' => $this->teacher_id],
        [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'corse_id' => $this->corse_id,
            'address' => $this->address ?? '',
            'img' => $photoPath
        ]
    );



    $this->resetForm();

    session()->flash('success', 'The operation was completed successfully');

    $this->dispatch('teacher-added')->to(ListTeachers::class);
    $this->dispatch('show-dashboard')->to(ListTeachers::class);

}


    public function render()
    {
        $courses = cours::all();
        return view('livewire.add-teacher-form',['courses'=>$courses]);
    }
}

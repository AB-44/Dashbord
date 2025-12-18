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

public function mount(){
    $this->corse_id = '';
}

    public function saveTeacher(){
        $vaildatedData = $this->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone' => 'required|digits_between:8,12',
            'img'=>'required|image|max:1024',
            'corse_id'=>'required|exists:courses,id'

        ]);

     $photoPath = 'img';
        if($this->img){
            $photoPath = $this->img->store('teachers_photos', 'public');
        }

        teacher::create([
            'name'=>$vaildatedData['name'],
            'email'=>$vaildatedData['email'],
            'phone'=>$vaildatedData['phone'],
            'corse_id'=>$vaildatedData['corse_id'],
            'img'=>$photoPath
        ]);
        
        $this->reset(['name','email','phone','img', 'corse_id']);

        session()->flash('success','تم تسجيل المعلم '.$this->name.' بنجاح ');

        $this->dispatch('teacher-added')->to(ListTeachers::class);

        $this->dispatch('show-dashboard')->to(ListTeachers::class);

    }


    public function render()
    {
        $courses = cours::all();
        return view('livewire.add-teacher-form',['courses'=>$courses]);
    }
}

<?php

namespace App\Livewire;

use App\Models\student;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddStudent extends Component
{

    use WithFileUploads;
    public $isOpen = false;
    public $name;
    public $email;
    public $phone;
    public $img;
    public function openModel(){
        $this->isOpen = true;
    }
    public function closeForm(){
        $this->isOpen = false;
        $this->reset(['name','email','phone','img']);
    }

    public function saveStudent(){
        $vaildatedData = $this->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone' => 'required|digits_between:8,12',
            'img'=>'nullable|image|max:1024',

        ]);

     $photoPath = null;
        if($this->img){
            $photoPath = $this->img->store('students_photos', 'public');
        }

        student::create([
            'name'=>$vaildatedData['name'],
            'email'=>$vaildatedData['email'],
            'phone'=>$vaildatedData['phone'],
            'img'=>$photoPath
        ]);
        $this->closeForm();
        session()->flash('success','تم تسجيل الطالب '.$this->name.' بنجاح ');

    }

    public function render()
    {
        return view('livewire.add-student');
    }
}

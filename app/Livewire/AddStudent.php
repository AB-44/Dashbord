<?php

namespace App\Livewire;

use App\Models\student;
use App\Models\student_class;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddStudent extends Component
{

    use WithFileUploads;
    public $student_id;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $img;
    public $class_id;

    public function EditCourse($id){
        $student = student::findOrfail($id);
        $this->student_id=$student->id;
        $this->name=$student->name;
        $this->email = $student->email;
        $this->phone = $student->phone;
        $this->address = $student->address;
        $this->class_id = $student->class_id;
    }
    public function saveStudent(){
         $this->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone' => 'required|digits_between:8,12',
            'img'=>'nullable|image|max:1024',
            'address'=>'required|string|max:255',
            'class_id'=>'required|exists:student_classes,id'

        ]);
        $student = student::find($this->student_id);
     $photoPath = null;
        if($this->img){
            $photoPath = $this->img->store('students_photos', 'public');
        }

        student::updateOrCreate(
            ['id'=>$this->student_id],
            [
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'address'=> $this->address,
            'class_id'=> $this->class_id,
            'img'=>$photoPath
        ]);
        $this->student_id = null;
        session()->flash('success','The student is registered'.$this->name.' success ');
        

    }

    public function render()
    {
        $classes = student_class::all();
        return view('livewire.add-student',compact('classes'));
    }
}

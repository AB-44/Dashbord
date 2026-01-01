<?php

namespace App\Livewire;

use App\Models\cours;
use App\Models\student;
use Livewire\Component;
use Livewire\WithFileUploads;

class SectionCourses extends Component
{
       use WithFileUploads;
    public $cours_id;
    public $title;
    public $img;
    public $details;
    public $about_cours;
    public $date;
    public function EditCourse($id){
        $cours = cours::findOrfail($id);
        $this->cours_id=$cours->id;
        $this->title=$cours->title;
        $this->details = $cours->details;
        $this->about_cours = $cours->about_cours;
        $this->date = $cours->Date;
    }

    public function SaveCours(){
        $this->validate([
        'title'=>'required|string|max:255',
        'details'=>'nullable|string|max:1000',
        'about_cours'=>'nullable|string|max:255',
        'date'=>'nullable|string|max:255'
       ]);
       $cours=cours::find($this->cours_id);
       $potoPath = $cours ? $cours->img: null;
       if($this->img){
        $potoPath = $this->img->store('cours_photos','public');
       }
       cours::updateOrCreate(
        ['id'=>$this->cours_id],
        [
            'title'=>$this->title,
            'details'=>$this->details,
            'about_cours'=>$this->about_cours,
            'Date'=>$this->date,
            'img'=>$potoPath
        ]
       );
       $this->reset();
       $this->cours_id = null;
       session()->flash('success','A new course has been added');
    }
    public function render()
    {
        $students = student::with('courses')->get();
        return view('livewire.section-courses');
    }
}

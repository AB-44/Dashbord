<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class DashboardContainer extends Component
{
    public $currentView = 'dashboard';

    #[On('show-add-teacher-form')]

    public function showAddTeacherForm()
    {
        $this->currentView = 'add-teacher-form';
    }

        #[On('open-edit-teacher')]
    public function openEditTeacher()
    {
        $this->currentView = 'add-teacher-form';
    }

     #[On('show-all-teachers')]
    public function showAllTheachers(){
        $this->currentView = 'list-teachers';
    }

        #[On('show-all-students')]
    public function showAllStudents(){
        $this->currentView = 'section-student.list-students';
    }




    #[On('show-add-cours')]
    public function showAddCours(){
        $this->currentView = 'section-courses';
    }


    #[On('show-add-student')]
    public function showAddStudent(){
        $this->currentView = 'add-student';
    }


    #[On('show-prepation-student')]
    public function ShowPrepationStudent(){
        $this->currentView = 'institute.prepation-students';
    }


    #[On('show-dashboard')]
    public function showDashboard()
    {
        $this->currentView = 'dashboard';
    }

    public function render()
    {
        return view('livewire.dashboard-container');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class DashboardContainer extends Component
{
    // المتغير الذي يتحكم في الواجهة المعروضة
    public $currentView = 'dashboard'; // 'dashboard' أو 'add-teacher'

    // 1. الاستماع للحدث الذي يطلقه زر "إضافة معلم"
    #[On('show-add-teacher-form')]
    public function showAddTeacherForm()
    {
        $this->currentView = 'add-teacher-form';
    }

    //الرجوع إلى الصفحة الرئيسية (بعد الحفظ/الإلغاء)
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

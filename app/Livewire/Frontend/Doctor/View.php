<?php

namespace App\Livewire\Frontend\Doctor;

use Livewire\Component;

class View extends Component
{
    public $doctors , $department;
    public function mount($doctors , $department)  {
        $this->doctors = $doctors;
        $this->department = $department;    
    }
    public function render()
    {
        return view('livewire.frontend.doctor.view',[
            'doctors'=>$this->doctors,
            'department'=>$this->department,
        ]);
    }
}

<?php

namespace App\Livewire\Admin\Carrers;

use Livewire\Component;
use App\Models\Carrers;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public function render()
    {
        $carrers = Carrers::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.carrers.index',['carrers'=> $carrers]);
    }
}

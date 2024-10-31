<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskComponent extends Component
{
    public $tasks=[];
    public $modal=false;
    public function mount(){//se ejecuta si o si en la pagina
        $this->tasks=Task::where('user_id', Auth::id())->get();
    }
    public function render()
    {
        
        return view('livewire.task-component');
    }
    
    public function openModal(){
        $this->modal=true;
    }
}

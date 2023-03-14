<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Michael', 'Man', 'Hippo'];

    public $loud = false;

    public $greeting = ['Hello'];

    public $users;


    public function mount()
    {
        $this->users = User::all();
    }

    // public function refreshChildren()
    // {
    //     $this->emit('refreshChildren', 'foo', 'bar');
    // }


    // public function mount(Request $request, $name)
    // {
    //     $this->name = $name;
    // }

    // public function updatedName()
    // {
    //     $this->name = strtoupper($this->name);
    // }


    // public function resetName($name = 'Chico')
    // {
    //     $this->name = $name;
    // }


    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    
     public function render()
    {
        return view('livewire.hello-world');
    }
}

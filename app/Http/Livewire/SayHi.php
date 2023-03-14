<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SayHi extends Component
{

    public $user;


    protected $listeners = ['refreshChildren' => '$refresh'];


    public function refreshMe($someVariable, $someVariable2)
    {
        ddd([$someVariable, $someVariable2]);
    }



    public function mount(User $user)
    {
        $this->user = $user;
    }
    

    public function render()
    {
        return view('livewire.say-hi');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.login')
            ->layout('layouts.custom-app1');
    }
}

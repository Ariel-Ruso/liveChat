<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatList extends Component
{
    
    public $mensajes;

    protected $listeners= ['mjeRecibido'];

    //inicializo array de mjes
    public function mount()
    {
        $this-> mensajes= [];
    }

    public function mjeRecibido( $mensaje )
    {
        $this->mensajes[]= $mensaje;
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}

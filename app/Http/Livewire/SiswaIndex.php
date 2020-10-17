<?php

namespace App\Http\Livewire;

use App\Siswa;
use Livewire\Component;

class SiswaIndex extends Component
{
    protected   $listeners  =   ['SiswaStore'];
    public function render()
    {
        return view('livewire.siswa-index', [
            'siswa' =>  Siswa::latest()->get()
        ]);
    }

    public function SiswaStore($siswa)
    {
    }
}

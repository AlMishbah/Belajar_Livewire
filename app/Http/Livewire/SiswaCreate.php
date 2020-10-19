<?php

namespace App\Http\Livewire;

use App\Siswa;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class SiswaCreate extends Component
{

    public  $nama_siswa, $email, $alamat;

    public function render()
    {
        return view('livewire.siswa-create');
    }

    public function store()
    {
        $this->validate([
            "nama_siswa"    =>  "required|min:4",
            "email"         =>  "required|email",
            "alamat"        =>  "required"
        ]);

        $siswa =    Siswa::create([
            'nama_siswa'    =>  $this->nama_siswa,
            'email'         =>  $this->email,
            'alamat'        =>  $this->alamat
        ]);
        $this->resetInput();
        $this->emit('SiswaStore', $siswa);
    }

    private function resetInput()
    {
        $this->nama_siswa   =   null;
        $this->email        =   null;
        $this->alamat       =   null;
    }
}

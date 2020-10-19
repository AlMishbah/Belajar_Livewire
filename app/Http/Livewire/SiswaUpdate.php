<?php

namespace App\Http\Livewire;

use App\Siswa;
use Livewire\Component;

class SiswaUpdate extends Component
{
    public $nama_siswa, $email, $alamat, $siswaId;

    protected $listeners    =   [
        'getSiswa'          =>  'showSiswa'
    ];

    public function render()
    {
        return view('livewire.siswa-update');
    }

    public function showSiswa($siswa)
    {
        $this->nama_siswa   =   $siswa['nama_siswa'];
        $this->email        =   $siswa['email'];
        $this->alamat       =   $siswa['alamat'];
        $this->siswaId      =   $siswa['id'];
    }

    public function update()
    {
        $this->validate([
            "nama_siswa"    =>  "required|min:4",
            "email"         =>  "required|email",
            "alamat"        =>  "required"
        ]);

        if ($this->siswaId) {
            $siswa  =   Siswa::find($this->siswaId);
            $siswa->update([
                'nama_siswa'    =>  $this->nama_siswa,
                'email'         =>  $this->email,
                'alamat'        =>  $this->alamat
            ]);

            $this->resetInput();

            $this->emit('siswaUpdated', $siswa);
        }
    }

    private function resetInput()
    {
        $this->nama_siswa   =   null;
        $this->email        =   null;
        $this->alamat       =   null;
    }
}

<?php

namespace App\Http\Livewire;

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
}

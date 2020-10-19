<?php

namespace App\Http\Livewire;

use App\Siswa;
use Livewire\Component;

class SiswaIndex extends Component
{
    public $statusUpdate    =   false;

    protected   $listeners  =   ['SiswaStore'];

    public function render()
    {
        return view('livewire.siswa-index', [
            'siswa' =>  Siswa::latest()->get()
        ]);
    }

    public function getSiswa($id)
    {
        $this->statusUpdate =   true;
        $siswa  =   Siswa::find($id);
        $this->emit('getSiswa', $siswa);
    }

    public function SiswaStore($siswa)
    {
        session()->flash('message', 'Data Siswa ' . $siswa['nama_siswa'] . ' telah berhasil ditambahkan');
    }
}

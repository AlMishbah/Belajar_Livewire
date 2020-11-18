<?php

namespace App\Http\Livewire;

use App\Siswa;
use Livewire\Component;

class SiswaIndex extends Component
{
    public $statusUpdate    =   false;

    protected   $listeners  =   ['SiswaStore', 'siswaUpdated'];

    public function render()
    {
        return view('livewire.siswa-index', [
            'siswa' =>  Siswa::latest()->paginate(3)
        ]);
    }

    public function getSiswa($id)
    {
        $this->statusUpdate =   true;
        $siswa  =   Siswa::find($id);
        $this->emit('getSiswa', $siswa);
    }

    public function destroy($id)
    {
        $siswaDelete    =   Siswa::find($id);
        $siswaDelete->delete();
        session()->flash('message', 'Data Siswa telah berhasil dihapus');

    }

    public function SiswaStore($siswa)
    {
        session()->flash('message', 'Data Siswa ' . $siswa['nama_siswa'] . ' telah berhasil ditambahkan');
    }

    public function siswaUpdated($siswa)
    {
        session()->flash('message', 'Data Siswa ' . $siswa['nama_siswa'] . ' telah berhasil diupdate');
    }
}

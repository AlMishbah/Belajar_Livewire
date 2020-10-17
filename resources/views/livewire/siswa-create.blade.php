<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label>Nama Siswa</label>
            <input wire:model="nama_siswa" type="text" class="form-control" id="" name="" placeholder="Nama Siswa">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input wire:model="email" type="email" class="form-control" id="" name="" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea wire:model="alamat" class="form-control" id="" name="" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">
            Submit
        </button>
    </form>
</div>

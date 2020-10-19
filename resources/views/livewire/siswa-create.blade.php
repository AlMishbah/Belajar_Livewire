<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label>Nama Siswa</label>
            <input wire:model="nama_siswa" type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="" name=""
            placeholder="Nama Siswa">
            @error('nama_siswa')
                <span class="invalid-feedback">
                    <strong>{{ $message }} </strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror" id="" name=""
            placeholder="name@example.com">
            @error('email')
            <span class="invalid-feedback">
                <strong>{{ $message }} </strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror" id="" name="" rows="3"></textarea>
            @error('alamat')
            <span class="invalid-feedback">
                <strong>{{ $message }} </strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm btn-primary">
            Submit
        </button>
    </form>
</div>

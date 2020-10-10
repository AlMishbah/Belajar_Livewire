<div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col" width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($siswa as $data)
            <tr>
                <td scope="col">{{$no++}}</td>
                <td>{{$data->nama_siswa}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->alamat}}</td>
                <td>
                    <button class="btn btn-sm btn-info text-white">Edit</button>
                    <button class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
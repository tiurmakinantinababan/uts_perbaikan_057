@extends('layout')

@section('content')

<h3>Daftar Pasien</h3>

<a href="/pasien/create" class="btn btn-primary mb-3">
    Tambah Pasien Baru
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>No Rekam Medis</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($pasiens as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->no_rekam_medis }}</td>
            <td>{{ $p->nama_pasien }}</td>
            <td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->umur }}</td>

            <td>
                <a href="/pasien/{{ $p->id }}/edit"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="/pasien/{{ $p->id }}"
                      method="POST"
                      style="display:inline"
                      onsubmit="return confirm('Yakin hapus data pasien ini?')">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@extends('layout')

@section('content')

<h3>Tambah Pasien</h3>

<form action="/pasien" method="POST">

    @csrf

    <div class="mb-3">
        <label>No Rekam Medis</label>
        <input type="text"
               name="no_rekam_medis"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama Pasien</label>
        <input type="text"
               name="nama_pasien"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>

        <select name="jenis_kelamin"
                class="form-control">

            <option>Laki-laki</option>
            <option>Perempuan</option>

        </select>
    </div>

    <div class="mb-3">
        <label>Umur</label>
        <input type="number"
               name="umur"
               class="form-control">
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection

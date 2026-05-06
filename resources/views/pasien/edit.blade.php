@extends('layout')

@section('content')

<h3>Edit Pasien</h3>

<form action="/pasien/{{ $pasien->id }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>No Rekam Medis</label>

        <input type="text"
               name="no_rekam_medis"
               class="form-control"
               value="{{ $pasien->no_rekam_medis }}">
    </div>

    <div class="mb-3">
        <label>Nama Pasien</label>

        <input type="text"
               name="nama_pasien"
               class="form-control"
               value="{{ $pasien->nama_pasien }}">
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>

        <select name="jenis_kelamin"
                class="form-control">

            <option value="Laki-laki"
            {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                Laki-laki
            </option>

            <option value="Perempuan"
            {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                Perempuan
            </option>

        </select>
    </div>

    <div class="mb-3">
        <label>Umur</label>

        <input type="number"
               name="umur"
               class="form-control"
               value="{{ $pasien->umur }}">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection

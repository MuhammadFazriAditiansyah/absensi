@extends('layout')

@section('konten')

<div class="mt-3">
<h4>Edit Siswa</h4>

<form class="mt-3" action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="name" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2" required>
    <label>Nis</label>
    <input type="number" name="nis"  value="{{ $siswa->nis }}" class="form-control mb-2" required>
    <label>Rombel</label>
    <input type="name" name="rombel" value="{{ $siswa->rombel }}" class="form-control mb-2" required>
    <label>Rayon</label>
    <input type="name" name="rayon"  value="{{ $siswa->rayon }}" class="form-control mb-2" required>
    <label>Pilih Keterangan :</label>
    <select name="keterangan"  value="{{ $siswa->keterangan }}" class="form-control mb-2" required>
        <option value="Hadir">Hadir</option>
        <option value="Sakit">Sakit</option>
        <option value="Izin">Izin</option>
        <option value="Alfa">Alfa</option>
    </select>

    <button class="btn btn-success mt-2">Edit</button>
</form>
</div>

@endsection

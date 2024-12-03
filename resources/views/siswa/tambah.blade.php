@extends('layout')

@section('konten')

<div class="mt-3">
<h4>Tambah Siswa</h4>

<form class="mt-3" action="{{ route('siswa.submit') }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="name" name="nama" class="form-control mb-2" required>
    <label>Nis</label>
    <input type="number" name="nis" class="form-control mb-2" required>
    <label>Rombel</label>
    <input type="name" name="rombel" class="form-control mb-2" required>
    <label>Rayon</label>
    <input type="name" name="rayon" class="form-control mb-2" required>
    <label>Pilih Keterangan :</label>
    <select name="keterangan"class="form-control mb-2" required>
        <option value="Hadir">Hadir</option>
        <option value="Sakit">Sakit</option>
        <option value="Izin">Izin</option>
        <option value="Alfa">Alfa</option>
    </select>

    <button class="btn btn-success mt-2">Tambah</button>
</form>
</div>

@endsection

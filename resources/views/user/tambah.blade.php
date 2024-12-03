@extends('layout')

@section('konten')

<div class="mt-3">
<h4 class="mt-5">Tambah Akun</h4>

<form class="mt-3" action="{{ route('user.submit') }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="name" name="name" class="form-control mb-3" required>
    <label>Email</label>
    <input type="name" name="email" class="form-control mb-3" required>
    <label>Password</label>
    <input type="password" name="password" class="form-control mb-3" required>
    <label for="role">Role</label>
    <select name="role" class="form-control mb-3" required>
        <option disabled selected>Pilih role</option>
        <option value="admin">Admin</option>
        <option value="user">Pengguna</option>
    </select>

    <button class="btn btn-success mt-2">Tambah</button>
</form>
</div>

@endsection

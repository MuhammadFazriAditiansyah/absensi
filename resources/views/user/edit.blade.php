@extends('layout')

@section('konten')

<div class="mt-3">
<h4 class="mt-5">Edit Akun</h4>

<form class="mt-3" action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="name" name="name" value="{{ $user->name }}" class="form-control mb-3" required>
    <label>Email</label>
    <input type="name" name="email" value="{{ $user->email }}" class="form-control mb-3" required>
    <label>Password</label>
    <input type="password" name="password" value="{{ $user->password }}" class="form-control mb-3" required>
    <label>Role</label>
    <select name="role" value="{{ $user->role }}" class="form-control mb-3" required>
        <option disabled selected>Pilih role</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>

    <button class="btn btn-success mt-2">Tambah</button>
</form>
</div>

@endsection

@extends('layout')

@section('konten')

<div class="d-flex mt-4">

    <div class="ms-auto">
        <a class="btn btn-primary" href="{{ route('user.tambah') }}">Tambah Akun</a>
    </div>
</div>

<table class="table table-striped table-bordered table-hover mt-4 text-center">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
    @foreach($user as $no=>$item)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['email'] }}</td>
        <td>{{ $item['role'] }}</td>
        <td>
            <div class="d-inline-flex">
                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning me-3">Edit</a>
                <form action="{{ route('user.delete', $item->id) }}" method="POST">
                    @csrf
                    <button class="btn sm btn-danger" >Hapus</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
  </table>


@endsection

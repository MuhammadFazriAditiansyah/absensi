@extends('layout')

@section('konten')

<div class="d-flex mt-4">
    <h4>Daftar kehadiran Siswa/Siswi</h4>

    <div class="ms-auto">
        <a class="btn btn-primary" href="{{route ('siswa.tambah') }}">Tambah Siswa</a>
    </div>
</div>

@if(Session::get('success'))
<div class="alert alert-success mt-2"> {{ session::get('success') }} </div>
@endif

<table class="table table-striped table-bordered table-hover mt-4 text-center">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nis</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    @foreach($siswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->nis }}</td>
        <td>{{ $data->rombel }}</td>
        <td>{{ $data->rayon }}</td>
        <td>{{ $data->keterangan }}</td>
        <td>
            <div class="d-inline-flex">
                <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning me-3">Edit</a>
                <form action="{{ route('siswa.delete', $data->id) }}" method="POST">
                    @csrf
                    <button class="btn sm btn-danger" >Hapus</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
  </table>


@endsection

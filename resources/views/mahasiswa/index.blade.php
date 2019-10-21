@extends('layout/main')
@section('title','Daftar Mahasiswa')
@section('container')
</nav>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Daftar Mahasiswa</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $mhs)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td scope="row">{{$mhs->nama}}</td>
                            <td scope="row">{{$mhs->nrp}}</td>
                            <td scope="row">{{$mhs->email}}</td>
                            <td scope="row">{{$mhs->jurusan}}</td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="h1"></div>
@endsection
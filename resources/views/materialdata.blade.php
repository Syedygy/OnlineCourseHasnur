@extends('layout.mainlayout')

@section('tittle')

@section('content')

<div class="col-md-12 sm-12 col-xs-12 mb-4 p-2">
    <div class="card bg-dark text-white">
        <div class="card-body">
            Data Materi
        </div>
    </div>
</div>

<div class="col-md-3 col-g-2">
    <a href="{{url ('addmaterial')}}"><i class="fa-solid fa-plus" style=""></i>Tambah Materi</a>
</div>

<div class="card">
    <table class="table caption-top">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kursus</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Link Materi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        @php($no=1)
        @foreach ($materiallist as $m)
            <tbody>
                <td>{{$no++}}</td>
                <td>{{$m->courserel['judul']}}</td>
                <td>{{$m->judul}}</td>
                <td>{{$m->deskripsi}}</td>
                <td>{{$m->link}}</td>
                <td>
                    <a href="{{url ('editmaterial',$m->id)}}"><i class="fas fa-edit"></i></a>
                    |
                    <a href="{{url ('deletematerial',$m->id)}}"><i class="fas fa-trash" style="color: red"></i></a>
                </td>
            </tbody>
        @endforeach
    </table>
</div>
@endsection

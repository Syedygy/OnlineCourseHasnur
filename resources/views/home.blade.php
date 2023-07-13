@extends('layout.mainlayout')

@section('tittle')

@section('content')

<div class="row p-3 g-1">
    <div class="col-md-12 sm-12 col-xs-12 mb-4">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    Online Course
                </div>
            </div>
    </div>

    <div class="card mb-5">
        <table class="table caption-top">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kursus</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Materi</th>
                    <th scope="col">Deskripsi Materi</th>
                    <th scope="col">Link Materi</th>
                </tr>
            </thead>

            @php($no=1)
            @foreach ($courselist as $c)
                <tbody>
                    <td>{{$no++}}</td>
                    <td>{{$c->judul}}</td>
                    <td>{{$c->deskripsi}}</td>
                    <td>{{$c->durasi}}</td>
                    <td>
                        @foreach ($c->materialrel as $mat )
                            -{{$mat->judul}}<br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($c->materialrel as $mat )
                            -{{$mat->deskripsi}}<br>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($c->materialrel as $mat )
                            -{{$mat->link}}<br>
                        @endforeach
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection

@extends('layout.mainlayout')

@section('tittle')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Course</div>
        <div class="card-body">
            <form action="/editcourse/{{$course->id}}" method="POST">
                @method("PUT")
                @csrf
                <input type="hidden" name="id" id="id" value="{{$course->id}}"/>
                <label for="">Judul</label><br>
                <input type="text" name="judul" id="judul" value="{{$course->judul}}" class="form-control"><br>
                <label for="">Deskripsi</label><br>
                <input type="text" name="deskripsi" id="deskripsi" value="{{$course->deskripsi}}" class="form-control"><br>
                <label for="">Durasi</label><br>
                <input type="text" name="durasi" id="durasi" value="{{$course->durasi}}" class="form-control"><br>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>

        </div>

    </div>

@endsection

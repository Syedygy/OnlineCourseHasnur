@extends('layout.mainlayout')

@section('tittle')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Materi</div>
        <div class="card-body">
            <form action="/editmaterial/{{$material->id}}" method="POST">
                @method("PUT")
                @csrf
                <input type="hidden" name="id" id="id" value="{{$material->id}}"/>
                <label for="course" class="form-label g-2">Course</label>
                    <select class="form-select mb-3" name="course">
                        <option selected disabled>Pilih course</option>
                            @foreach ($course as $data)
                            <option value="{{$data->id}}">
                                {{$data->judul}}
                            </option>
                            @endforeach
                    </select>
                <label for="">Judul</label><br>
                <input type="text" name="judul" id="judul" value="{{$material->judul}}" class="form-control"><br>
                <label for="">Deskripsi</label><br>
                <input type="text" name="deskripsi" id="deskripsi" value="{{$material->deskripsi}}" class="form-control"><br>
                <label for="">Link</label><br>
                <input type="text" name="link" id="link" value="{{$material->link}}" class="form-control"><br>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>

        </div>

    </div>

@endsection

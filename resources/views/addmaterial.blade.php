@extends('layout.mainlayout')

@section('tittle')

@section('content')

<style>
    .main{
        height: 100vh;
        box-sizing: border-box;
    }


    form div{
        margin-bottom: 15px;
    }

</style>

<div class="card" style="margin:20px;">
    <div class="card-header">Tambah Material</div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="col-5">
                    <label for="course_id" class="form-label">Course</label>
                    <select class="form-select" name="course_id">
                        <option selected disabled>Pilih kursus</option>
                            @foreach ($courselist as $data)
                            <option value="{{$data->id}}">
                                {{$data->judul}}
                            </option>
                            @endforeach
                    </select>
                </div>
                <div class="col-5">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="col-5">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                </div>

                <div class="col-5">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" name="link" id="link" class="form-control" required>
                </div>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

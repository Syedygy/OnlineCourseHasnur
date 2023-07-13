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
    <div class="card-header">Tambah Course</div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="col-5">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="col-5">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                </div>


                <div class="col-5">
                    <label for="durasi" class="form-label">Durasi</label>
                    <input type="text" name="durasi" id="durasi" class="form-control" required>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

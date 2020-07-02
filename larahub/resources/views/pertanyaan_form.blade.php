@extends('adminlte.master')

@section('content_title')
    Buat Pertanyaan
@endsection

@section('content')
    <form method="POST" action="/pertanyaan">
        @csrf
        <div class="form-group row">
            <label class="col-3">Judul Pertanyaan</label>
            <div class="col-4">
                <input type="text" name="title" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Isi Pertanyaan</label>
            <div class="col-4">
                <textarea class="form-control" name="content"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Create</button>
            </div>
        </div>
    </form>
@endsection

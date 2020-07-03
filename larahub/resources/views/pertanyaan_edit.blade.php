@extends('adminlte.master')

@section('content_title')
    Buat Pertanyaan
@endsection

@section('content')
    <form method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label class="col-3">Judul Pertanyaan</label>
            <div class="col-4">
                <input type="text" name="title" class="form-control" value="{{$data[0]->title}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Isi Pertanyaan</label>
            <div class="col-4">
                <textarea class="form-control" name="content">{{$data[0]->content}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-4">
                <button type="submit" name="edit" class="btn btn-primary"><i class="fa fa-check"></i> Edit</button>
            </div>
        </div>
    </form>
@endsection

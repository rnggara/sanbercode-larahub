@extends('adminlte.master')

@section('content_title')
    Jawaban Pertanyaan
@endsection

@section('content')
    <form method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-3">Pertanyaan</label>
            <span class="label">{{$data['pertanyaan'][0]->content}}</span>
        </div>
        <div class="form-group row">
            <label class="col-3">Tanggal dibuat</label>
            <span class="label">{{date('d F Y', strtotime($data['pertanyaan'][0]->created_at))}}</span>
        </div>
        <div class="form-group row">
            <label class="col-3">Terakhir diupdate</label>
            <span class="label">
                <?php if(empty($data['pertanyaan'][0]->updated_at)){
                    echo "-";
                } else {
                    echo date('d F Y', strtotime($data['pertanyaan'][0]->updated_at));
                } ?>
            </span>
        </div>
        <div class="form-group row">
            <label class="col-3">Jawaban anda</label>
            <div class="col-4">
                <textarea class="form-control" name="content"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3"></label>
            <div class="col-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Jawab</button>
            </div>
        </div>
    </form>

    <table class="table display">
        <thead>
        <tr>
            <td>#</td>
            <td>Jawaban</td>
            <td>Tanggal Jawaban</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data['jawaban'] as $key=>$catJawaban)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$catJawaban->content}}</td>
                <td>{{date('d F Y', strtotime($catJawaban->created_at))}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $("table.display").DataTable();
        });
    </script>
@endpush

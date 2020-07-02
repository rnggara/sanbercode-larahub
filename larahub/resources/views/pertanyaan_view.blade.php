@extends('adminlte.master')



@section('content_title')
    Data Pertanyaan
@endsection

@section('content')
    <div class="form-group row">
        <a href="/pertanyaan/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pertanyaan</a>
    </div>
    <table class="table table-bordered display">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Pertanyaan</th>
                <th>Konten Pertanyaan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $catData)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$catData->title}}</td>
                    <td>{{$catData->content}}</td>
                    <td><a href="/jawaban/{{$catData->id}}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a></td>
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

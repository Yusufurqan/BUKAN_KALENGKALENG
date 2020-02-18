@extends('layouts.all')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-3">
                <div class="card-header">Tabel Kelas</div>
                <div class="card-body">
                    <form action="{{url('kelas/import')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="import_file" id="">
                        <input type="submit" value="Import" class="btn btn-xs btn-success mb-2">
                    </form>
                    <a href="{{url('kelas/create')}}" class="btn btn-xs btn-success mb-2">Create</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kelas as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->nama}}</td>
                                <td>
                                <a href="{{url('kelas/edit')}}" class="btn btn-xs btn-primary">Edit</a>
                                <form action="{{url('room/'.$item->id)}}" method="GET">
                            
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" class="btn badge-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
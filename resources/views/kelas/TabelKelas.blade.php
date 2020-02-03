@extends('layouts.app')

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
                                    <a href="" class="btn btn-xs btn-primary">Edit</a>
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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">Input Kelas</div>
                <div class="card-body">
                    @if($massage=Session::get('massage'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> {{$massage}}
                    </div>
                    @endif
                    {!! Form::open(['url'=>'kelas','method'=>'post']) !!}
                    <div class="form-group">
                        {!! Form::label('nama','Room Name',['class'=>'control-label']) !!}
                        {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Enter Nama Kelas']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('submit!',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
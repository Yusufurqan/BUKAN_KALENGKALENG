@extends('layouts.all')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card mt-3">
                <div class="card-header">Administrator Card</div>

                <div class="card-body">
                    {!! Form::open(['url'=>'foo/bar'])!!}
                    <div class="form-group">
                        {!! Form::label('email','E-mail Address',['class'=>'control-label'])!!}
                        {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'Enter username'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            @role('administrator')
            <div class="card mt-3">
                <div class="card-header">Administrator Card</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos distinctio ipsam, laborum, ullam atque rerum consectetur, consequatur neque soluta enim architecto sequi quae alias illo maxime repellat numquam temporibus.</p>
                </div>
            </div>
            @endrole
            @role(['administrator','admin'])
            <div class="card mt-3">
                <div class="card-header">Administrator Card</div>

                <div class="card-body">
                    <a href="{{url('/kelas')}}">ke Tabel Kelas</a>
                </div>
            </div>
            @endrole
            @role(['administrator','admin','client'])
            <div class="card mt-3">
                <div class="card-header">Client Card</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos distinctio ipsam, laborum, ullam atque rerum consectetur, consequatur neque soluta enim architecto sequi quae alias illo maxime repellat numquam temporibus.</p>
                </div>
            </div>
            @endrole
        </div>
    </div>
</div>
@endsection
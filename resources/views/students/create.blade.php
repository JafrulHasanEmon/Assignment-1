@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Students</div>

                    <div class="panel-body">

                        {!! Form::open(array('route'=>'student.store')) !!}
                        <div class="form-group">
                            {!! Form::label('title','Enter Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sid','Enter Student ID') !!}
                            {!! Form::text('sid',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('name','Enter Student Name') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('cgpa','Enter Student CGPA') !!}
                            {!! Form::text('cgpa',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>

                @if($errors->has())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@endsection

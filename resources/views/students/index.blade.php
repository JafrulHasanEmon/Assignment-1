@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Students</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ link_to_route('student.show',$student->title,[$student->id]) }}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['student.destroy',$student->id],'method'=>'DELETE')) !!}
                                        {{ link_to_route('student.edit','Edit',[$student->id],['class'=>'btn btn-primary']) }}
                                        |

                                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}


                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>

                {{ link_to_route('student.create','Add new Student',null,['class'=>'btn btn-success']) }}

            </div>
        </div>
    </div>
@endsection

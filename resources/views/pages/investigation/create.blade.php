@extends('layouts.app')

@section('content')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>
                </div>
            @endif
            

            <div class="container">
                <div class="col-lg-12">
                    {!! Form::open(['route' => 'investigation.store','method'=>'POST']) !!}

                    <div class="form-group col-md-10">
                    {{ Form::label('investigationName', 'Nombre de la Investigación') }}
                    {{ Form::textarea('investigationName',null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group col-md-2">
                        {{ Form::label('investigationYear', 'Año') }}
                        {{ Form::text('investigationYear', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group col-md-12">
                        {{ Form::label('investigationAuthors', 'Autor (es)') }}
                        {{ Form::text('investigationAuthors', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="col-md-12 text-center">
                        {!! Form::submit('Añadir', ['class' => 'btn btn-success']) !!}
                    </div>

                    {!! Form::close() !!}
                    </div>
              
            </div>
@endsection

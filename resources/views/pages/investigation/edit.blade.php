@extends('layouts.app')

@section('content')

<div class="container">
    

<h1 style="text-align: center; font-family: 'Monda';">Editar Publicación</h1><hr>

        @if(Session::has('notice'))
           <p> <strong> {{ Session::get('notice') }} </strong> </p> </br>
        @endif

<div class="formulario">
       {{ Form::open(array('url' => 'investigation/' . $investigation->id)) }}

        <div class="form-group col-md-10">
        {{ Form::label('investigationName', 'Nombre de la Investigación') }}
        {{ Form::textarea('investigationName',$investigation->investigationName, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-2">
            {{ Form::label('investigationYear', 'Año') }}
            {{ Form::text('investigationYear', $investigation->investigationYear, array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-12">
            {{ Form::label('investigationAuthors', 'Autor (es)') }}
            {{ Form::text('investigationAuthors', $investigation->investigationAuthors, array('class' => 'form-control')) }}
        </div>

       @if($investigation->id)
          {{ Form::hidden ('_method', 'PUT') }}
       @endif
       {{ Form::submit('Guardar') }}
    {{ Form::close() }}

<!-- 



    {{ Form::model($investigation, array('route' => array('investigation.update', $investigation->id), 'method' => 'PUT')) }}

    <div class="form-group col-md-10">
        {{ Form::label('investigationName', 'Nombre de la Investigación') }}
        {{ Form::textarea('investigationName', null, array('class' => 'form-control')) }}
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
        {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
    </div>
    

{{ Form::close() }}
</div> -->

</div>




@endsection
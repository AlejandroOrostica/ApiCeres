@extends('layouts.app')

@section('content')


<div class="container">
    <h1 style="text-align: center; font-family: 'Monda';">Editar Publicación</h1><hr>
    {{ Form::model($grade, array('route' => array('grade.update', $grade->id), 'method' => 'PUT')) }}

    <div class="form-group col-md-2">
        {{ Form::label('gradeyear', 'Año') }}
        {{ Form::number('gradeyear', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('gradeName', 'Grado/Título') }}
        {{ Form::text('gradeName', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('gradeInstitution', 'Institución') }}
        {{ Form::text('gradeInstitution', null, array('class' => 'form-control')) }}
    </div>

  
    <div class="form-group col-md-12 text-center">
        {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
    </div>
    

{{ Form::close() }}
</div>



</div>
</body>

@endsection
@extends('layouts.app')

@section('content')



<div class="container">
    <h1 style="text-align: center; font-family: 'Monda';">Editar Proyecto</h1><hr>

{{ Form::model($project, array('route' => array('project.update', $project->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('projectName', 'Título') }}
        {{ Form::text('projectName', null, array('class' => 'form-control')) }}
    </div>
  
    <div class="form-group">
        {{ Form::label('membertName', 'Autor/es') }}
        {{ Form::text('memberName', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('projectEnd', 'Año de publicación') }}
        {{ Form::date('projectEnd', null, array('class' => 'form-control')) }}
    </div>

  
    <div class="col-md-12 text-center">
        {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
    </div>
    

{{ Form::close() }}

</div>

</div>
</body>

@endsection
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
        <div class="col-sm-6 col-sm-offset-3" style="font-family: 'Monda'; font-size: 15px; text-align: center;"><h3 > Crear Usuario </h3>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Campos</h5>
                </div>
                <div class="panel-body" >
                    <div class="input-group col-sm-6 col-sm-offset-3" >
                        <form method="POST" action="{{url('investigation/create')}}">
                            {{csrf_field()}}
                            <br>
                            <label for="investigationName">Titulo: </label>
                            <br>
                            <input type="text" name="investigationName" value="{{old('investigationName')}}">
                            <br><br>
                             <label for="investigationYear">Titulo: </label>
                            <br>
                            <input type="text" name="investigationYear" value="{{old('investigationYear')}}">
                            <br><br>
                             <label for="investigationAuthors">Titulo: </label>
                            <br>
                            <input type="text" name="investigationAuthors" value="{{old('investigationAuthors')}}">
                            <br><br>
                            
                            
                            <button class="btn btn-success" type="submit">Añadir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

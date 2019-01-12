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
                        <form method="POST" action="{{url('user/create')}}">
                            {{csrf_field()}}
                            <br>
                            <label for="name">Nombre: </label>
                            <br>
                            <input type="text" name="name" value="{{old('name')}}">
                            <br><br>
                            <label for="lastName">Apellidos: </label>
                            <br>
                            <input type="text" name="lastName" value="{{old('lastName')}}">
                            <br><br>
                            <label for="email">Correo: </label>
                            <br>
                            <input type="email" name="email" value="{{old('email')}}">
                            <br><br>
                            <label for="userType">Tipo de usuario: <br>Adm | 1 <br>Nor | 2</label>
                            <br>
                            <input input type="number" min="1" max="2" step="1" name="userType" value="{{old('userType')}}">

                            <br><br>
                            {{--<label for="userDescription">Descripción: </label>
                            <br>
                            <input type="text" name="userDescription">
                            <br>
                            <br>
                            <label for="userCharge">Cargo: </label>
                            <br>
                            <input type="text" name="userCharge">
                            <br>
                            <br>--}}

                            <button class="btn btn-success" type="submit">Crear nuevo usuario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

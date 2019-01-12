@extends('layouts.app')

@section('content')

@if (Auth::check())
<div class="container" >
	<div style="font-family: 'Monda'; font-size: 30px; text-align: center;"><h3 > Administrar Usuarios </h3>
		<!--Begin Buscador -->

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" ng-model="buscador" class="form-control"  placeholder="Buscar" >
                    <span class="input-group-addon">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>  
                    </span>
                </div>
            </div>
        </div>
    </div>
<!--End Buscador --> <br>

	 <button type="button" role="link" onclick="window.location='/user/create'" class="btn btn-success">Añadir nuevo usuario</button> <br><br> </div>
	<div class=" col-md-12">
	@foreach($users as $user)
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	{{$user->name}} {{$user->lastName}}
	  	@if($user->userType==1)
	  	<b>Administrador</b>
	  	@endif
	  </div>
	  <div class="panel-body">
	  	<div class="col-md-5">
	  	Email: {{$user->email}} <br>
	  	Cargo: <br>
	  	Grado: <br>
	  	</div>
	  	<div class="col-md-4"></div>
	  	<div class="col-md-3">
            <button type="button" role="link" onclick="window.location='{{route('user.show',['id'=>$user->id])}}'" class="btn btn-primary">Detalles</button>
            {{--<button type="button" role="link" onclick="window.location='{{route('user.edit',['id'=>$user->id])}}'" class="btn btn-warning">Editar</button>
            <br>--}}
            <form action="{{route('user.destroy',$user)}}" method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>

	  		
	  	</div>

	  </div>
	</div>

	@endforeach


</div>
@else
<div>
	You are not logged in :(
</div>
@endif
</div>

@endsection

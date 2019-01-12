@extends('layouts.app')


@section('content')


<div class="main-content" ng-controller="docentesCtrl">
    <div class="container">
<!--         <h3 class="site-title">Mi Perfil</h3> -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                 
        </div>
    </div>
                <div class="col-xs-7 col-sm-12 col-md-12">
                    <div class="profile-block" ng-show="mostrarPerfil">
                      @if(Session::has('notice'))
                       <p> <strong> {{ Session::get('notice') }} </strong> </p> </br>
                      @endif

                      <h2>{{$user->name}} {{$user->lastName}}</h2>
                       <hr>

                      <ul class="nav nav-tabs">
                      <li class="<%activoPub%>"><a href="" ng-click="mostrarPublicaciones()">Mis Proyectos</a></li>
                      
                    </ul>

                    </div>

                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">
          <div class="col-md-12" ng-show="mostrarPub">
            <h3>Proyectos</h3>
           <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Inicio</th>
                <th>Final</th>
                <th>Descripción</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                @if ($user->id== $project->user_id)
               <tr>
                          
                 <td>{{$project->projectName}} </td>
                 <td>{{$project->projectInit}} </td>
                 <td>{{$project->projectEnd}} </td>
                 <td>{{$project->projectDescription}} </td>

                        @endif
               </tr>
                   @endforeach 
             
            </tbody>
          </table>
            <hr >
            
       




            </div>
            
          
                </div>
                </div>
                </div>
               
               
            </div>
           
        </div>
</div>

@endsection
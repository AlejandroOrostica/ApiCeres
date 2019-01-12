@extends('layouts.app')


@section('content')


<div class="main-content" ng-controller="docentesCtrl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">
                   
                    <div class="col-xs-3 col-sm-3 col-md-5">
                        <img class="img-responsive" src="../images/academicos/{{$user->userPhoto}}" style="width:auto; border-radius: 50%;">
                   
        <div class=" clearfix">
                      
          
            
           
        </div>
    </div>
                <div class="col-xs-7 col-sm-4 col-md-6">
                    <div class="profile-block" ng-show="mostrarPerfil">
                      @if(Session::has('notice'))
                       <p> <strong> {{ Session::get('notice') }} </strong> </p> </br>
                      @endif

                      <h2>{{$user->name}} {{$user->lastName}}</h2>
                      <h4>{{$user->email}}</h4>
                      @foreach($grades as $grade)
                        @if($grade->user_id==$user->id)
                         <h4>{{$grade->gradeName}}</h4>
                        @break
                        @endif
                      @endforeach
                      
                      <!-- <i><h4 style="font-size:18px; font-family: Lato;">{{$user->userDescription}}</h4></i> -->
                       <hr>

                      <ul class="nav nav-tabs">
                      <li class="<%activoPub%>"><a href="" ng-click="mostrarPublicaciones()">Publicaciones</a></li>
                      <li class="<%activoProy%>"><a href="" ng-click="mostrarProyectos()">Proyectos de Investigación</a></li>
                      <li class="<%activoGrado%>"><a href="" ng-click="mostrarEstudios()">Grados</a></li>
                      
                    </ul>

                    </div>



          <!-- Edicion de datos personales -->
                    <div class="profile-block" ng-show="mostrarBoxEditar" >
                      {{ Form::open(array('url' => 'user/' . $user->id)) }}
                        <div class="form-group">
                        {!! Form::label('name', 'Nombres:', ['class' => 'col-lg-2 control-label']) !!}
                          <div class="col-lg-10">
                          {!! Form::text('name', $value = $user->name, ['class' => 'form-control', 'placeholder' => 'Nombres']) !!}
                          </div>
                        </div>
                        <div class="form-group">
                        {!! Form::label('lastname', 'Apellidos:', ['class' => 'col-lg-2 control-label']) !!}
                          <div class="col-lg-10">
                          {!! Form::text('lastname', $value = $user->lastName, ['class' => 'form-control', 'placeholder' => 'Apellidos']) !!}
                          </div>
                        </div>
                       <br />
                       <div class="form-group">
                        {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                          <div class="col-lg-10">
                          {!! Form::email('email', $value = $user->email, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                          </div>
                        </div>
                       <br />
                       @if($user->id)
                          {{ Form::hidden ('_method', 'PUT') }}
                       @endif
                      {!! Form::submit('Guardar', ['class' => 'btn btn-success'] ) !!}
                       <button type="button" class="btn btn-primary" ng-click="editarPerfil()"><i class="fas fa-wrench"></i> Cancelar</button>

                        {{ Form::close() }}





                     <!--  <form>
                      <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        
                      </div>
                     
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@usach.cl">
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="nombre">Grado académico</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        
                      </div>
                       <div class="form-group">
                        <label for="nombre">Año de obtención de grado académico</label>
                        <?php
                              echo "<select name='ano'>";
                                  for($i=date("Y");$i>=1900;$i--)
                                  {
                                      echo "<option value='".$i."'>".$i."</option>";
                                  }
                              echo "</select>";
                         ?>
                        
                      </div>

                    
                     
                    
                      <button type="submit" class="btn btn-primary" ng-click="editarPerfil()">Guardar</button>
                    </form>
                            -->
    
                    </div>

                    </div>

              
            @if(Auth::user())
                @if(Auth::user()->id==$user->id || Auth::user()->userType==2)
                 <div class="col-xs-1  col-md-1">
                   <button type="button" class="btn btn-primary" ng-click="editarPerfil()" ng-show="mostrarPerfil"><i class="fas fa-wrench"></i> Editar</button>

                 </div>
                @endif
            @endif   
          
                </div>
                </div>
                </div>

<div class="row">
 <div class="panel">
<div class=" panel-body ">

      <!--OOOOOOOOOO0000000OO PUBLICACIONES 000000000000000000000000000-->         



      <!---------------- MOSTRAR publicaciones -------------------------->
      <div class="col-md-12" ng-show="mostrarPub">
                <div class="row">
                    <div class="col-xs-8  col-md-11">
                    <h3>Publicaciones</h3>
                     </div>
                    <!-- <div class="col-xs-1  col-md-1">
                      <button type="button" class="btn btn-primary" ng-click="editarPublicaciones()" ><i class="fas fa-wrench"></i> Editar</button>

                    </div> -->
                     <div class="col-xs-1  col-md-1">
                      <td><a href="/publicaciones/create/{{$user->id}}" class="btn btn-success" role="button">Añadir</a>
                        </td>
                    </div>
                </div>
                <h4>Google Scholar</h4>
                 <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Autor/es</th>
                      <th>Año</th>
                      <th>Fuente</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($pages as $page)
                      @foreach ($investigations as $investigation)
                     <tr>
                        @if ($user->id== $page->user_id)
                          @if ($page->id== $investigation->page_id)
                           @if($page->pageName=="Google Scholar")

                         <td>{{$investigation->investigationName}}</td>
                         <td>{{$investigation->investigationAuthors}}</td>
                         <td> {{$investigation->investigationYear}}</td>
                         <td>{{$page->pageName}} </td>
                         <td><a href="/investigation/{{$investigation->id}}/edit" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a></td>
                          @endif
                        @endif
                      @endif  
                     </tr>
                     @endforeach
                         @endforeach   
                  </tbody>

                </table>
               
                  <hr>
                  <h4>ResearchGate</h4>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Autor/es</th>
                      <th>Año</th>
                      <th>Fuente</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($pages as $page)
                      @foreach ($investigations as $investigation)
                     <tr>
                        @if ($user->id== $page->user_id)
                          @if ($page->id== $investigation->page_id)
                           @if($page->pageName=="ResearchGate")

                         <td>{{$investigation->investigationName}}</td>
                         <td>{{$investigation->investigationAuthors}}</td>
                         <td> {{$investigation->investigationYear}}</td>
                         <td>{{$page->pageName}} </td>
                         <td><a href="/editar/{{$investigation->id}}" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a></td>
                          @endif
                        @endif
                      @endif  
                     </tr>
                     @endforeach
                         @endforeach   
                  </tbody>
                </table>
                
                <hr>
                <h4>Scopus</h4>
             
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Autor/es</th>
                      <th>Año</th>
                      <th>Fuente</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($pages as $page)
                      @foreach ($investigations as $investigation)
                     <tr>
                        @if ($user->id== $page->user_id)
                          @if ($page->id== $investigation->page_id)
                           @if($page->pageName=="Scopus")

                         <td>{{$investigation->investigationName}}</td>
                         <td>{{$investigation->investigationAuthors}}</td>
                         <td> {{$investigation->investigationYear}}</td>
                         <td>{{$page->pageName}} </td>
                         <td><a href="/editar/{{$investigation->id}}" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a></td>
                          @endif
                        @endif
                      @endif  
                     </tr>
                     @endforeach
                         @endforeach   
                  </tbody>
                </table>
                 <hr>
                <h4>Otros</h4>
             
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Autor/es</th>
                      <th>Año</th>
                      <th>Fuente</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($pages as $page)
                      @foreach ($investigations as $investigation)
                     <tr>
                        @if ($user->id== $page->user_id)
                          @if ($page->id== $investigation->page_id)
                           @if($page->pageName=="Otros")

                         <td>{{$investigation->investigationName}}</td>
                         <td>{{$investigation->investigationAuthors}}</td>
                         <td> {{$investigation->investigationYear}}</td>
                         <td>{{$page->pageName}} </td>
                         <td><a href="/editar/{{$investigation->id}}" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a></td>
                          @endif
                        @endif
                      @endif  
                     </tr>
                     @endforeach
                         @endforeach   
                  </tbody>
                </table>
            
                             
      </div>
      <!---------------- END MOSTRAR publicaciones ---------------------->

      <!--OOOOOOOOOO0000000OO END PUBLICACIONES 00000000000000000000000-->      







      <!--OOOOOOOOOO0000000O000O PROYECTOS 000000000000000000000000000-->   

      <!-------------------- Edicion proyectos -------------------------->
      <div class="profile-block" ng-show="mostrarProyEdit" >
          <div class="row">
              <div class="col-xs-8  col-md-9">
              <h3>Proyectos de Investigación</h3>
               </div>
              <div class="col-xs-1  col-md-1">
                <button type="button" class="btn btn-primary" ng-click="editarInvestigacion()" ><i class="fas fa-wrench"></i> Editar</button>

              </div>
               <div class="col-xs-1  col-md-1">
                

              </div>
          </div>
               
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Título</th>
                  <th>Autor/es</th>
                  <th>Año de publicación</th>
                  <th>Fuente</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($projects as $project)
                       @if ($user->id== $project->user_id)
                          {{ Form::open(array('url' => 'user/' . $user->id)) }}
                             <td>
                              <div class="form-group">
                              {!! Form::label('projectName',  ' ', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                {!! Form::text('projectName', $value = $project->projectName, ['class' => 'form-control', 'placeholder' => 'Nombres']) !!}
                                </div>
                              </div>
                              </td>

                              <td>
                          
                                  Autores
                                
                                </td>
                                
                                  <td>{{$project->projectEnd}} </td>
                             @endif
                        {!! Form::submit('Guardar', ['class' => 'btn btn-success'] ) !!}
                        {{ Form::close() }}
              @endforeach   
              </tbody>
            </table>

      </div>
      <!---------------- END Edicion proyectos -------------------------->

      <!-------------------- MOSTRAR PROYECTOS -------------------------->
      <div class="col-md-12" ng-show="mostrarProy">
          <div class="row">
              <div class="col-xs-8  col-md-11">
              <h3>Proyectos de Investigación</h3>
               </div>
              <div class="col-xs-1  col-md-1">
               <td><a href="/project/create/" class="btn btn-success" role="button">Añadir</a>

              </div>
          </div>
                 <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Autor/es</th>
                      <th>Año de publicación</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($projects as $project)
                     <tr>
                                @if ($user->id== $project->user_id)
                                   <td>{{$project->projectName}} </td>
                                    <td>
                                      {{$project->memberName}}
                                      </td>
                                      
                                        <td>{{$project->projectEnd}} </td>
                                        <td><a href="/project/{{$project->id}}/edit" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a></td>
                              @endif
                     </tr>
                         @endforeach  
                  </tbody>
                </table>
                  <hr >
                            
      </div>
      <!-------------------- END MOSTRAR PROYECTOS ---------------------->

      <!--OOOOOOOOOO0000000O000O END PROYECTOS 000000000000000000000000000-->  



      <!--OOOOOOOOOO0000000O000O GRADOS 000000000000000000000000000-->  
      <div class="col-md-12" ng-show="mostrarGrado">
          <div class="row">
              <div class="col-xs-8  col-md-11">
              <h3>Grados</h3>
               </div>
              
               <div class="col-xs-1  col-md-1">
               <td><a href="/grade/create/" class="btn btn-success" role="button">Añadir</a>

              </div>
              
          </div>
                 <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Año</th>
                      <th>Grado/Título</th>
                      <th>Institución</th>
                    </tr>
                  </thead>
                  <tbody>
                       @foreach ($grades as $grade)
                     <tr>
                                @if ($user->id== $grade->user_id)
                                   <td>{{$grade->gradeyear}} </td>
                                       <td>{{$grade->gradeName}} </td>
                                        <td>{{$grade->gradeInstitution}} </td>
                                        <td><a href="/grade/{{$grade->id}}/edit" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a></td>
                              @endif
                     </tr>
                         @endforeach     
                  </tbody>
                </table>
                  <hr >

                      
                             
      </div>
      <!--OOOOOOOOOO0000000O000O GRADOS 000000000000000000000000000-->  



</div>
</div>
</div>
                


@endsection
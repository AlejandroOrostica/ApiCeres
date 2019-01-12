@extends('layouts.app')

@section('content')
<!--Begin Título principal -->
<div class="container animated fadeInDown">
    <h2 class="ceres" style="text-align: center; ">CERES</h2>
    <h2 class="textoceres" style="text-align: center; ">Computer Engineering RESearchers</h2>
</div>
<!--End Título principal -->

<!--Begin Buscador -->
<div class="container">
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
</div>
<!--End Buscador -->



<!--Begin tabla academicos ng-repeat-->
<div class="container" style="margin-top: 20px;" ng-controller="myController">            
    <div class="row <%tamano%>" style="margin-right: 10px;" ng-repeat="profe in datos | filter:buscador | orderBy:'lastName'">
        <div class="panel panel-default panel-transparent">
            <a class="academicosinicio" ng-click="mostrarEstadisticas()" href="">
            <div class="panel-body">                    
                 <img class="circular--square col-xs-2 col-sm-2 col-md-2" src="images/academicos/<%profe.userPhoto%>" style="<%imgTamano%>">
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <b> <% profe.name %> <% profe.lastName %> </b><br> <%profe.cargo%> <br> <%profe.email%> 
                </div>
                <div class="col-md-2" ng-show="mostrarGrafico">
                     <a href="/user/<%profe.id%> " class="btn btn-primary" role="button">Ver perfil</a>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12" ng-show="mostrarGrafico">

                      <div class="grafico col-md-6">
                         <h3 style="font-family: 'Monda'; font-size: 18px; text-align: center;">Publicaciones</h3>
                          <canvas 
                                class="chart chart-line" 
                                chart-data="datas" 
                                chart-labels="etiquetas"
                                chart-colors="colors2" 
                                chart-series="series">
                                    
                            </canvas>
                        </div>
                         <div class="grafico col-md-6">
                      <h3 style="font-family: 'Monda'; font-size: 18px; text-align: center;">Proyectos</h3>
                          <canvas 
                                class="chart chart-bar" 
                                chart-data="datas" 
                                chart-labels="etiquetas"
                                chart-colors="colors1" 
                                chart-series="series">
                                    
                            </canvas>
                        </div>
                </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>  
<!--End Tabla academicos-->



@endsection
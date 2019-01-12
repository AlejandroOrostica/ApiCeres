@extends('layouts.app')


@section('content')   

<div class="container-fluid col-md-12" ng-controller="myController">
	<h1 class=" col-md-12" style="text-align: center; margin-bottom: 8px;" > Mis Estadísticas </h1><hr>
    <div class="panel panel-default col-md-6">
      <div class="panel-body">
          <div class="grafico">
                         <h3 style="font-family: 'Monda'; font-size: 18px; text-align: center;">Publicaciones 2015-2017</h3>
                        
						<?php
						$array = array();
            for($i=1998; $i<=2019;$i++){
              $array[$i]=0;
            }
						foreach ($yearsCollection as $key => $value){
              if($value!=null){
               
						    $array[$key]=$value;
              }
						}
						?>
						

    <canvas 
          class="chart chart-line" 

          chart-data='[{{$array[2010]}},{{$array[2011]}},{{$array[2012]}},{{$array[2013]}},{{$array[2014]}},{{$array[2015]}},{{$array[2016]}},{{$array[2017]}},{{$array[2018]}},{{$array[2019]}}]'
          chart-labels="etiquetas"
          chart-colors="colors1" 
          chart-series="series">
              
    </canvas>
    
          </div>

      </div>
    </div>




    <div class="panel panel-default col-md-6">
      <div class="panel-body">
          <div class="grafico">
       <h3 style="font-family: 'Monda'; font-size: 18px; text-align: center;">Publicaciones por plataforma</h3>
                        
						<?php
						$array = array();
            $array["Google Scholar"]=0;
            $array["ResearchGate"]=0;
            $array["Scopus"]=0;
            $array["Otros"]=0;
						foreach ($pagesStats as $key => $value){
              if($value!=null){
               
						    $array[$key]=$value;
              }
						}
 						?>
          @if($array["Google Scholar"]||$array["ResearchGate"]|| $array["Scopus"]!=0)
      					<canvas 
                    class="chart chart-pie" 

                    chart-data='[{{$array["Google Scholar"]}},{{$array["ResearchGate"]}},{{$array["Scopus"]}},{{$array["Otros"]}}]'
                    chart-labels="['Google Scholar','ResearchGate','Scopus','Otros']"
                    chart-colors="colors3" 
                    >
                          
                </canvas>
          @else
              
                <h3 style="font-family: 'Monda'; margin-top: 25%;margin-bottom: 23%; text-align: center;">Usted no posee publicaciones registradas</h3>
          @endif
                          
                          
          </div>

      </div>
    </div>





@endsection
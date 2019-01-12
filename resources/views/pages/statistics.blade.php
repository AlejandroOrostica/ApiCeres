@extends('layouts.app')

@section('content')




<div class="container-fluid col-md-12" ng-controller="myController">
          
           <?php
              $array = array();
              for($i=1990; $i<=2019;$i++){
                $array[$i]=0;

              }
              foreach ($papersPerYear as $key => $value){
                if($value!=null){
                  $array[$key]=$value;
                  //echo $key, "=>: ",$value, "\n";
                  

                }
              }
           
            ?>


    <div class="panel panel-default col-md-6">
      <div class="panel-body">
          <div class="grafico">
                         <h3 style="font-family: 'Monda'; font-size: 18px; text-align: center;">Publicaciones 2000-2019</h3>
   <canvas 
          class="chart chart-line" 

          chart-data='[{{$array[2000]}},{{$array[2001]}},{{$array[2002]}},{{$array[2003]}},{{$array[2004]}},{{$array[2005]}},{{$array[2006]}},{{$array[2007]}},{{$array[2008]}},{{$array[2009]}},{{$array[2010]}},{{$array[2011]}},{{$array[2012]}},{{$array[2013]}},{{$array[2014]}},{{$array[2015]}},{{$array[2016]}},{{$array[2017]}},{{$array[2018]}},{{$array[2019]}}]'
          chart-labels="etiquetas"
          chart-colors="colors1" 
          chart-series="series">
              
    </canvas>
          </div>

      </div>
    </div>

    <div class="panel panel-default col-md-6">
                   <?php
                      $array = array();
                      for($i=1990; $i<=2019;$i++){
                        $array[$i]=0;

                      }
                      foreach ($papersPerPage as $key => $value){
                        if($value!=null){
                          $array[$key]=$value;
                          //echo $key, "=>: ",$value, "\n";
                          

                        }
                      }
                   
                    ?>
      <div class="panel-body">
          <div class="grafico ">
               <h3 style="font-family: 'Monda'; font-size: 18px; text-align: center;">Publicaciones por plataforma</h3>
                     
            <canvas 
                  class="chart chart-doughnut" 
                  chart-data='[{{$array["Google Scholar"]}},{{$array["ResearchGate"]}},{{$array["Scopus"]}},{{$array["Otros"]}}]'
                  chart-labels="etiquetas2"
                  chart-colors="colors3"
                  chart-series="series">
                      
              </canvas>
          </div>

      </div>
    </div>
    
    <div class="panel panel-default col-md-12">
       <?php
              $array = array();
             
              foreach ($papersPerAcademic as $key => $value){
                if($value!=null){
                  $array[$key]=$value;
                  //echo $key, "=>: ",$value, "\n";
                  

                }
              }
            //var_dump($array);
            ?>
      <div class="panel-body">
        <div class="col-md-2"></div>
          <div class="grafico col-md-8">
             <h3 style="font-family: 'Monda'; font-size: 18px; text-align: center;">Publicaciones por académico</h3>
                          <canvas 
                                class="chart chart-horizontalBar"
                                chart-data='[{{$array["Roberto"]}},{{$array["Víctor"]}},{{$array["Leonel"]}},{{$array["Gonzalo"]}},{{$array["Max"]}},{{$array["Fernando"]}},{{$array["José Luis"]}},{{$array["Mónica"]}}]'
                                chart-labels="etiquetasprofes"
                                chart-colors= "colors2"
                                chart-series="series"
                                chart-options="option">
                                    
                            </canvas>
                        </div>
                        <div class="col-md-2"></div>

      </div>
    </div>





</div>
                
<!--End Tabla academicos-->



@endsection
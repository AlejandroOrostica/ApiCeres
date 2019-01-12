var app = angular.module('docentesDiinf', ["chart.js"], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


app.controller('docentesCtrl',[ '$scope','$http',function($scope,$http){
		$scope.mostrar=false; //mostrar algo en el front
		$scope.mostrarPerfil=!false;
		$scope.mostrarBoxEditar=false;
		$scope.mostrarPub=true; //por defecto se muestran si o si las publicaciones al inicio
		$scope.mostrarGrado=false;
		$scope.mostrarProy=false;

		$scope.mostrarPubEdit=false;
		$scope.mostrarGradoEdit=false;
		$scope.mostrarProyEdit=false;
		
		
		//$scope.mostrarGraf=false;
		$scope.activoPub="active";
		$scope.activoGrado="";
		$scope.activoProy="";


		
		$scope.mostrarGrafico=!false;

		


		$scope.editarPerfil=function(){
			if($scope.mostrarBoxEditar==false){
				$scope.mostrarBoxEditar=true;
				$scope.mostrarPerfil=false;
			
			}else{
				$scope.mostrarBoxEditar=false;
				$scope.mostrarPerfil=true;

			}
		}

		$scope.editarPublicaciones=function(){
			if($scope.mostrarPubEdit==false){
				$scope.mostrarPubEdit=true;
				$scope.mostrarPub=false;
				$scope.mostrarGrado=false;
				$scope.mostrarProy=false;
				
			}else{
				$scope.mostrarPubEdit=false;
				$scope.mostrarPub=true;
			}
		}
		$scope.editarInvestigacion=function(){
			if($scope.mostrarProyEdit==false){
				$scope.mostrarProyEdit=true;
				$scope.mostrarPub=false;
				$scope.mostrarGrado=false;
				$scope.mostrarProy=false;
				
			}else{
				$scope.mostrarProyEdit=false;
				$scope.mostrarProy=true;
			}
		}
		$scope.editarGrados=function(){
			if($scope.mostrarBoxEditar==false){
				$scope.mostrarBoxEditar=true;
				$scope.mostrarPerfil=false;
				$scope.mostrarPub=false;
				$scope.mostrarGrado=false;
				$scope.mostrarProy=false;
				
			}else{
				$scope.mostrarBoxEditar=false;
				$scope.mostrarPerfil=true;
				$scope.mostrarPub=true;
				$scope.mostrarGrado=false;
				$scope.mostrarProy=false;
			}
		}

		$scope.mostrarPublicaciones=function(){
			if($scope.mostrarPub==false){
				$scope.mostrarPub=true;
				$scope.mostrarGrado=false;
				$scope.mostrarProy=false;
				$scope.activoPub="active";
				$scope.activoGrado="";
				$scope.activoProy="";
			}
			

		}
		$scope.mostrarEstudios=function(){
			if($scope.mostrarGrado==false){
				$scope.mostrarGrado=true;
				$scope.mostrarPub=false;
				$scope.activoGrado="active";
				$scope.mostrarProy=false;
				$scope.activoPub="";
				$scope.activoProy="";

			}

		}

		$scope.mostrarProyectos=function(){
			if($scope.mostrarProy==false){
				$scope.mostrarProy=true;
				$scope.mostrarPub=false;
				$scope.mostrarGrado=false;
				$scope.activoGrado="";
				$scope.activoPub="";
				$scope.activoProy="active";

			}
		}

		$scope.mostrarGraficas=function(){
				//$scope.mostrarGraf=true;

		}





}]);

app.controller('myController', function($scope, $http){
	$scope.mostrarGrafico=!false;
	$scope.tamano="col-xs-12 col-sm-12 col-md-6 col-lg-6";
	$scope.imgTamano="width:26%;border-radius: 50%;";

	$scope.tamanio=function(){
		if($scope.mostrarGrafico!=false){
			$scope.tamano="col-xs-12 col-sm-12 col-md-12 col-lg-12";
			$scope.imgTamano="width:10%;border-radius: 50%;";

		}else{
			$scope.tamano="col-xs-12 col-sm-12 col-md-6 col-lg-6";
			$scope.imgTamano="width:26%;border-radius: 50%;";
		}
	}

	$scope.tamanoGraficos="col-xs-12 col-sm-12 col-md-12 col-lg-12";

    $http.get('http://127.0.0.1:8000/getData') //local
   //$http.get('http://diinfceres.herokuapp.com/getData')
		.then(function (response){
			
			$scope.datos=response.data.users;

			console.log($scope.datos);
	
		});
	$scope.mostrarGrafico=false;

	$scope.mostrarEstadisticas=function(){
			if($scope.mostrarGrafico==false){
				$scope.mostrarGrafico=true;
				$scope.tamanio();
				
			}else{
				$scope.mostrarGrafico=false;
				$scope.tamanio();
			}


		}

    $scope.etiquetas = ['2000','2001','2002','2003','2004','2005','2006', '2007', '2008','2009','2010','2011','2012','2013','2014','2015', '2016', '2017','2018','2019'];
    $scope.etiquetas2= ['Google Scholar','ResearchGate','Scopus','Otros'];
    $scope.etiquetasprofes=['Roberto González','Víctor Parada','Leonel Medina','Gonzalo Acuña','Max Chacón','Fernando Rannou','J.L. Jara','Mónica Villanueva'];
    $scope.series = ['A', 'B'];
    $scope.colors1= ['#ED402A'];
    $scope.colors2= ['#A0B421', '#00A39F'];
    $scope.colors3= ['#ff6600', '#ffcc00','#009900','#9900ff'];
    $scope.colors8= ['#ff6600', '#ffcc00','#009900','#9900ff','#A0B421', '#00A39F','#ED402A','#ED402A'];
    $scope.datta= [0,30,40];
 
    $scope.datas = [
      [65, 59, 80, 81],
      [28, 48, 40, 19]
    ];
});


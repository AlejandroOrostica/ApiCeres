<!DOCTYPE html>
<html ng-app="docentesDiinf" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div>
        <div>
            @include('includes.header')
        </div>
        
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>

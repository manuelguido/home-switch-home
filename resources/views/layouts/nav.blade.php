@extends('layouts.app')

@section('main-content')
    
    @include('includes/nav')
        
    <div id="app">
        
        @yield('content')

    </div>

@endsection
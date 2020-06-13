@extends('layouts/app')
@section('content')
    <div class='jumbotron text-center'>
        <h1>{{$title}}</h1>
        <div id="app">
            <div class="container">
                <Films></Films>
            </div>
        </div>
    </div>
    <script  src="{{asset('js/app.js')}}"></script>
@endsection

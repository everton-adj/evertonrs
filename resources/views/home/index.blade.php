@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(isset(Auth::user()->name))
            <h1>Bem Vindo {{Auth::user()->name}}</h1>
        @else
            <h1>Bem Vindo</h1>
            <p style="color:grey">Faça seu registro <a href="{{ route('register') }}"><u>aqui.</u></a></p>
        @endif
    </div>
</div>
@endsection

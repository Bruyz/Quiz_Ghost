@extends('layout')

@section('content')

<div class="row text-center">
    <h2> <strong> Resultado </strong> </h2>
</div>

<div class="row">
    <div class="col-md-4 text-center"> <strong> Gabarito </strong> </div>
    <div class="col-md-4 text-center"> <strong> Resposta </strong> </div>
    <div class="col-md-4 text-center"> <strong> Resultado </strong> </div>
</div>

@for($i = 1; $i <= 10; $i++)
    <div class="row">
        <div class="col-md-4 text-center"> {{$dados[$i]["gabarito"]}} </div>
        <div class="col-md-4 text-center"> {{$dados[$i]["resposta"]}} </div>
        <div class="col-md-4 text-center"> {{$dados[$i]["resultado"]}} </div>
@endfor

<div class="row text-center py-4">
    <div class="col-md-12-h4"> <strong> {{$dados["mensagem"]}} </strong></div>
</div>

<div class="row py-4">
    <button onclick="window.location.href='/';" type="button" 
    class="btn btn-lg btn-primary btn-block">Voltar ao Início</button>
</div>

@endsection
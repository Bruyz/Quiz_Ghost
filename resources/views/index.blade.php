@extends('layout')
@section('content')

    <div class ="jumbotron">
        <p class ="h3 text-center py-4 "><strong>Ghost Quiz</strong></p>
    </div>
     <div class ="row">
            <div class ="col-md-6 col-sm-6 text-center imagem">
                <a href="#" class="img-thumbnail logo">
                    <img class="img-fluid" src="{{asset('storage/img/Principal.webp')}}"/>
                </a>
            </div>
            <div class ="col-md-6 col-sm-6 text-center py-4">
                <p class="texto">
                    <h4>Descubra agora o quanto você sabe sobre a banda <br>
                <strong>GHOST</strong> </h4>
                </p>    
                <div class="card=footer py-4 text-center">

                    <a href="/iniciar" class="btn btn-primary" role="button">Começar</a>
                </div>
            </div>
     </div>

@endsection
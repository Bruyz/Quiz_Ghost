@extends('layout')
@section('content')

    <div class ="card border">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-center">
                    <p class="texto">
                        <h4><strong>Pergunta 5:</strong></h4>
                    </p>
                </div>
            </div>

            <form action="{{route('dadosPagina5')}}" method="POST"></form>
                @csrf
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
                <div class="form-group py-4">
                    <label for="pergunta"> <h3> <strong> Qual o nome do novo intérprete do Papa Nihil jovem? </strong> </h3> </label>
                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                        <label class="form-check-label" for="pergunta">
                            <h5> Justin Andrews </h5>
                        </label>
                    </div>

                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                        <label class="form-check-label" for="pergunta">
                            <h5> Tobias Forger </h5>
                        </label>
                    </div>
                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                        <label class="form-check-label" for="pergunta">
                            <h5> Hayden Scott </h5>
                        </label> 
                    </div>
                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                        <label class="form-check-label" for="pergunta">
                            <h5> Jutty Taylor </h5>
                        </label> 
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
                <button onclick="window.location.href='/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
            </form>
        </div>
    </div>    
@endsection
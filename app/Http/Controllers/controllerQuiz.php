<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller
{
    private $perguntas = array();

    public function __construct(){
        $this->perguntas['pergunta1'] = "A";
        $this->perguntas['pergunta2'] = "D";
        $this->perguntas['pergunta3'] = "B";
        $this->perguntas['pergunta4'] = "A";
        $this->perguntas['pergunta5'] = "A";
        $this->perguntas['pergunta6'] = "B";
    }

    public function index(){
        session(['acertos' => 0]);
        return view('pagina1');
    }

    public function dadosPagina1(Request $request){
        $reposta = $request->input('pergunta');
        
        session(['reposta1' =>$resposta]);

        if(strcmp($this->perguntas['pergunta1'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertou']);
        }else
            session(['resultado1' => 'Errou']);

    return view('pagina2');
    }

    public function dadosPagina2(Request $request){
        $reposta = $request->input('pergunta');
        
        session(['reposta2' =>$resposta]);

        if(strcmp($this->perguntas['pergunta2'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado2' => 'Acertou']);
        }else
            session(['resultado2' => 'Errou']);

    return View('pagina3');
    }

    public function dadosPagina3(Request $request){
        $reposta = $request->input('pergunta');
        
        session(['reposta3' =>$resposta]);

        if(strcmp($this->perguntas['pergunta3'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado3' => 'Acertou']);
        }else
            session(['resultado3' => 'Errou']);

    return View('pagina4');
    }

    public function dadosPagina4(Request $request){
        $reposta = $request->input('pergunta');
        
        session(['reposta4' =>$resposta]);

        if(strcmp($this->perguntas['pergunta4'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado4' => 'Acertou']);
        }else
            session(['resultado4' => 'Errou']);

    return View('pagina5');
    }

    public function dadosPagina5(Request $request){
        $reposta = $request->input('pergunta');
        
        session(['reposta5' =>$resposta]);

        if(strcmp($this->perguntas['pergunta5'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado5' => 'Acertou']);
        }else
            session(['resultado5' => 'Errou']);

    return View('pagina6');
    }

    public function dadosPagina6(Request $request){
        $reposta = $request->input('pergunta');
        
        session(['reposta6' =>$resposta]);

        if(strcmp($this->perguntas['pergunta6'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado6' => 'Acertou']);
        }else
            session(['resultado6' => 'Errou']);

        $dados = array();

        $dados[1]['gabarito'] = $this->perguntas['pergunta1'];
        $dados[1]['resposta'] = session('resposta1');
        $dados[1]['resultado'] = session('resultado1');
        
        $dados[2]['gabarito'] = $this->perguntas['pergunta2'];
        $dados[2]['resposta'] = session('resposta2');
        $dados[2]['resultado'] = session('resultado2');

        $dados[3]['gabarito'] = $this->perguntas['pergunta3'];
        $dados[3]['resposta'] = session('resposta3');
        $dados[3]['resultado'] = session('resultado3');

        $dados[4]['gabarito'] = $this->perguntas['pergunta4'];
        $dados[4]['resposta'] = session('resposta4');
        $dados[4]['resultado'] = session('resultado4');
        
        $dados[5]['gabarito'] = $this->perguntas['pergunta5'];
        $dados[5]['resposta'] = session('resposta5');
        $dados[5]['resultado'] = session('resultado5');
        
        $dados[6]['gabarito'] = $this->perguntas['pergunta6'];
        $dados[6]['resposta'] = session('resposta6');
        $dados[6]['resultado'] = session('resultado6');

        ///////////////////////////////////////////////

        $acertos = session('acertos');

        if($acertos == 6)
            $dados['mensagem'] = "Parabéns, você é um fã de carteirinha da banda Ghost!";
        else if($acertos > 5)
            $dados['mensagem'] = "Ótimo! Você acertou" . $acertos . "de 6!";
        else if($acertos > 4)
            $dados['mensagem'] = "Você conhece um pouco sobre a banda. Acertou" . $acertos . "de 6.";
        else if($acertos == 3)
            $dados['mensagem'] = "Poxa! Acertou apenas 50% do quiz. :(";
        else
            $dados['mensagem'] = "Precisa se inteirar mais sobre a banda!Você acertou" . $acertos . "de 6.";
    
        return view('resultado', compact('dados'));
        }
}

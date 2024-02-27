<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    include_once "Classe.php";
    include_once "Alunno.php";

    class AlunniController{

        function index(Request $request, Response $response, $args){
            $classe = new Classe();
            $response->getBody()->write($classe->getClass());
            return $response;
        }

        function show(Request $request, Response $response, $args){
            $classe = new Classe();
            $alunnoFinder = $args["nome"];
            $ilTrovato = null;
        
            foreach($classe->listaAlunni as $broski){
                if($broski->getNome() == $alunnoFinder){
                    $ilTrovato = $broski;
                    break;
                }
            }
        
            if($ilTrovato == null){
                $risposta = "Broski non trovato";
                $response->getBody()->write($risposta);
                return $response;
            }
        
            $risposta = $ilTrovato->toString();
            $response->getBody()->write($risposta);
            return $response;
        }
        
    }
?>
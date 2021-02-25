<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
#use App\Controllers\BaseController;
    use App\Models\categoriasModel;    

    class categoriasController {

        public function getAll($request, $response, $args){
            $categorias = categoriasModel::getAll();
            $categoriasJson = json_encode($categorias);
            $response->getBody()->write($categoriasJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }
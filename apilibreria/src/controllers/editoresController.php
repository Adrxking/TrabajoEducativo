<?php 

namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
        #use App\Controllers\BaseController;
    use App\Models\editoresModel;

    class editoresController {

        public function getAll($request, $response, $args){
            $editores = editoresModel::getAll();
            $editoresJson = json_encode($editores);
            $response->getBody()->write($editoresJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }
<?php

namespace Config\Routes;

class Router
{


    private string $url_utilisateur_router;
    private array $routes=[];

    public function __construct(string $url_utilisateur_router)
    {
        $this->url_utilisateur_router=trim($url_utilisateur_router,"/");
    }

    /**
     * @return string
     */
    public function getUrlUtilisateurRouter(): string
    {
        return $this->url_utilisateur_router;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }


    public function get(string $url_routes,string $controller, string $actionController){

        $this->routes['GET'][]=new Route($url_routes, $controller, $actionController);
    }

    public function post(string $url_routes,string $controller, string $actionController){

        $this->routes['POST'][]=new Route($url_routes, $controller, $actionController);
    }

    public function Run(){

        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {

            if($route->RouteExiste($route->getUrl_routes(), $route->getController(), $route->getActionController(),$this->url_utilisateur_router)){
                return $route->RouteExecute();
            }

        }

        return header('HTTP/1.0 404 Not Found ');
    }


}
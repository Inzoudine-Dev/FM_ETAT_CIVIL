<?php

namespace Config\Routes;

class Routes
{

    private string $url_routes;
    private string $controller;
    private string $actionController;

    public function __construct(string $url_routes,string $controller,string $actionController)
    {
        $this->url_routes=trim($url_routes, "/");
        $this->controller=$controller;
        $this->actionController=$actionController;
    }

    /**
     * @return string
     */
    public function getActionController(): string
    {
        return $this->actionController;
    }

    /**
     * @return string
     */
    public function getUrl_routes(): string
    {
        return $this->url_routes;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    public function RouteExiste(string $url_routes, string $controller, string $actionController, string $url_router)
    {

        if($url_routes==$url_router && class_exists($controller) && method_exists($controller,$actionController)){
            return true;
        }
        else{
            return false;
        }

    }

    public function RouteExecute(){

        $controller=new $this->controller();
        $action=$this->actionController;
        $controller->$action();

    }


}
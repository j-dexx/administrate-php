<?php
namespace Jdexx\Administrate;
use Route;

class RouteGenerator
{
    public $resource;
    public $route;
    public $route_name;

    public function __construct($route_name, $resource)
    {
        $this->resource = $resource;
        $this->route_name = $route_name;
        $this->route = Route::getRoutes()->getByName($route_name);
    }

    public function call()
    {
        return route($this->route_name, $this->routeParameters());
    }

    /**
     * Returns an array of route parameter names to the appropriate field
     */
    private function routeParameters()
    {
        $parameters = [];
        foreach ($this->route->parameterNames() as $parameter_name)
        {
            $parameters[$parameter_name] = $this->resource->$parameter_name;
        }
        return $parameters;
    }
}

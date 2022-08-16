<?php

class Router
{

    private $routes;

    public function __construct()
    {
        include_once('./config/routes.php');
        $this->routes = $routes;
    }

    public function run()
    {
        $requestedUrl = $_SERVER['REQUEST_URI'];
        foreach ($this->routes as $controller => $availableRoutes) {
            foreach ($availableRoutes as $availableRoute => $actionWithParameters) {
                $fullAvailableRoute = SITE_ROOT . $availableRoute;
                if (preg_match("~^$fullAvailableRoute~", $requestedUrl)) {

                    $actionWithParameters = preg_replace("~$fullAvailableRoute~",
                        $actionWithParameters, $requestedUrl);
                    $actionWithParametersSegments = explode('/', $actionWithParameters);
                    $action = array_shift($actionWithParametersSegments);
                    $requestedController = new $controller();
                    $requestedAction = 'action' . ucfirst($action);
                    call_user_func_array(array($requestedController, $requestedAction),
                        $actionWithParametersSegments);
                    break 2;
                }
            }
        }

    }
}
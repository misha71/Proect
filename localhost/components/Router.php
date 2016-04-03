<?
class Router {
public $routes;

public function __construct(){
$routesPath = ROOT."/config/routes.php";
$this->routes = include($routesPath);
}

public function getUrl() {
if(!empty($_SERVER['REQUEST_URI'])){
return trim($_SERVER['REQUEST_URI'], '/');
}
}
public function run() {
$uri = $this->getUrl();
foreach ($this->routes as $uriPattern => $path) {
$obrabotka = addcslashes($uriPattern, '/');
if (preg_match("/".$obrabotka."/", $uri)) {
$internalRow = preg_replace("~$uriPattern~", $path, $uri);
$segments = explode('/', $internalRow);
$controlerName = array_shift($segments)."Controller";
$controlerName = ucfirst($controlerName);
$action_name = "action".ucfirst(array_shift($segments));
$parametrs = $segments;
$controllerFile = ROOT."/controllers/".$controlerName.".php";
if(file_exists($controllerFile)) {
include($controllerFile);
}
$controllerObject = new $controlerName;
/* $result = $controllerObject -> $action_name($parametrs); */
/* можно по другому */
$result = call_user_func_array(array($controllerObject,$action_name ),$parametrs);
if($result != null) {
break;
}

}


}
}
}
<?php
namespace CSY2028;
namespace Ijdb\Controllers;
require '../functions/loadTemplate.php';
require '../dbconfig.php';
/*require '../classes/DatabaseTable.php';
require '../controllers/JokeController.php';
require '../Controllers/CategoryController.php';*/

$jokesTable = new \CSY2028\DatabaseTable($pdo, 'joke', 'id');
$categoriesTable = new \CSY2028\DatabaseTable($pdo, 'category', 'id');

$controllers = [];
$controllers['joke'] = new Ijdb\Controllers\Joke($jokesTable);
$controllers['category'] = new Ijdb\Controllers\Category($categoriesTable);

$route = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
if ($route == '') {
    $page = $controllers['joke']->home();
}
else {
    list($controllerName, $functionName) = explode('/', $route);
    $controller = $controllers[$controllerName];
    $page = $controller->$functionName();
}
$output = loadTemplate('../templates/' . $page['template'], $page['variables']);
$title = $page['title'];
require '../templates/layout.html.php';
?>
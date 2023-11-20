<?php

declare(strict_types=1);

require_once __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;
use function App\Config\{registerRoutes, registerMiddlewares};

$app = new App(Paths::SOURCE . "App/container-definitions.php");

registerRoutes($app);
registerMiddlewares($app);

return $app;
<?php

use Runtime\Map;
use Runtime\Vector;
use Runtime\Entity\Provider;

include "vendor/autoload.php";

function createContext($app, $argv = null)
{
    $modules = new Vector("App");
    $params = new Map([
        "base_path" => __DIR__,
        "providers" => new Vector(
            new Provider("app", $app),
        ),
        "modules" => $modules
    ]);
    
    if ($app == "Runtime.Console.App")
    {
        $modules->push("Runtime.Core");
        $modules->push("Runtime.Console");
        $params->set("cli_args", Vector::create($argv));
    }
    $context = \Runtime\rtl::createContext($params);
    $context->start();
    return $context;
}

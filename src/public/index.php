<?php

/* Init */
include dirname(__DIR__) . "/init.php";

/* Run app */
$context = createContext("Runtime.Web.BasePHP");
$context->provider("app")->main();
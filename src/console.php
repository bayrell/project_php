#!/usr/bin/env php
<?php

include "init.php";

/* Run app */
$context = createContext("Runtime.Console.App", $argv);
$context->provider("app")->main();
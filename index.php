<?php

require 'vendor/autoload.php';
require 'core/bootstraps.php';

use App\Core\{Router, Request};

Router::load('App/routes.php')
    ->direct(Request::uri(), Request::method());





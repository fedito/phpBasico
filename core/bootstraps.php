<?php


use App\Core\App as App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);
    return require "App/view/{$name}.view.php";
};

function redirect($path){

    header("location: /{$path}");
}
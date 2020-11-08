<?php


namespace Chaly\core;

/**
 * Class Application
 * @author Chaly
 * @package Chaly\core
 */
class Application
{


    public $router;
    public function __construct()
    {

        $this->router = new Router();
    }

    public function run(){
       //
    }
}
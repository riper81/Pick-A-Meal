<?php
/**
 * Created by PhpStorm.
 * User: salvador
 * Date: 4/25/15
 * Time: 2:57 AM
 */

class App {

    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];

    public function __construct() {
        $this->parseURL();
    }

    public function parseURL(){

        if(isset($_GET['url'])){
            echo $_GET['url'];
        }
    }
}
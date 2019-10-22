<?php

/**
 *  App Core class
 * Creates URL and loads controller 
 * URL FORMAT  /controller/method/params
 */
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $param = [];
    public function __construct()
    {
        // print_r($this->geturl());
        $url = $this->geturl();

        //Look for controllers
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            //unset 0  index
            unset($url[0]);
        }

        //require controllers
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        //check
    }

    public function geturl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

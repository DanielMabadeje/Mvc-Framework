<?php
/**
 *  App Core class
 * Creates URL and loads controller 
 * URL FORMAT  /controller/method/params
 */
class Core{
    protected $currentController = 'Pages';
    protected $currentMethod ='index';
    protected $param=[];
    public function __construct()
    {
     $this->geturl('hi');   
    }

    public function geturl($go)
    {
        if (isset($_GET['url'])) {
            $uri=explode('/', $_GET['url']);
        echo $_GET['url'].$go;
        print_r($uri);

        }
    }
}
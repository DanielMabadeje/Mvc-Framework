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
     $this->geturl();   
    }

    public function geturl()
    {
        echo $_GET['url'];
        // if (condition) {
        //     # code...
        // }
    }
}
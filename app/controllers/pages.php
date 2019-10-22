<?php
class Pages extends Controller
{ 
    public function __construct()
    {

    }
    public function about($id)
    {
        echo 'hello'.$id;
        # code...
    }
    public function Index(Type $var = null)
    {
        $this->view('index');
    }
}

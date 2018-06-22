<?php

class Core{
    protected $currentController='Pages';
    protected $currentMethod='index';
    protected $params=[];

    public function __construct(){
        // get the url 
        $url=$this->getUrl();
        
        // Check if the controller exists in the controkler folder
        if(file_exists('../app/controllers/'. ucwords($url[0]). '.php')){
            // If the controller exists set it as the default controller
            $this->currentController=ucwords($url[0]);
            // unset that array index
            unset($url[0]);
        }
        
        // Require that controller
        require_once '../app/controllers/'.$this->currentController.'.php';

        // instansiate that controller
        $this->currentController=new $this->currentController();
        
        // check if the second parameter isset
        if(isset($url[1])){
            // Check if a method exists in that particular controller
            if(method_exists($this->currentController,$url[1])){
                $this->currentMethod= $url[1];
                // unset the value
                unset($url[1]);
            }
        }
        // get the params 
        $this->params=$url?array_values($url):[];

        // do a callback function. why ???
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
        // Trim the trailing forward slash after the url just in case
            $url=rtrim($_GET['url'], '/');
        // filter any characters not contained in a url using a url filter
            $url=filter_var($url, FILTER_SANITIZE_URL);

        // explode the url to retur an array of indexed values
        //exploding is basically splitting a sting by string
            $url=explode('/', $url);
            
            return $url;
        }

    }
}

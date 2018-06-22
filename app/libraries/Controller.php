<?php
// create a base controller for which other controllers extend from it
class Controller{
    /* 
     *create a function load Model which will take a model check if it exists and return
     *a new instantiated model
     */

    public function loadModels($model) {
        // require the model file
        require_once '../app/model/' .$model .'.php';

        // instantiate it
        return new $model;
    }

    public function loadViews($view, $data=[]){
        // check if a view existe
        if(file_exists('../app/view/' .$view .'.php')){
            require_once '../app/view/' .$view .'.php';
        }else {
            die('view doesnt exist');
        }
    }
}
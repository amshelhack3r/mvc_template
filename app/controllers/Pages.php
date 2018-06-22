<?php
class Pages extends Controller{
    public function __construct(){}
    public function index(){
        $data = [
            'title'=>"WELCOME TO A SIMPLE MVC FRAMEWORK"
        ];

        $this->loadViews('index', $data);
    }    
}
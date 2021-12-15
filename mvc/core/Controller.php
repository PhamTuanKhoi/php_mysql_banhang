<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }

    public function view_home($view, $data=[]){
        require_once "./mvc/view_home/".$view.".php";
    }

    public function view_tk($view, $data=[]){
        require_once "./mvc/view_tk/".$view.".php";
    }

}
?>
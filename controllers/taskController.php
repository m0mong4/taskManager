<?php

class taskController{
    public function index() : void {
        $model=new Task();
        $tasks=$model->getAll();
        require 'views/tasks.php';
    }

    public function show(int $id):void{
        $model=new Task();
        $task=$model->getById($id);

        if($task==null){
            $controller= new errorController();
            $controller->error();
            return;

        }
        require 'views/task.php';
    }

}

?>
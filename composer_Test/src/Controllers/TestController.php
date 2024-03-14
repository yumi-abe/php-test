<?php

namespace src\Controllers;

use src\Models\TestModel;

class TestController
{
    public function run(){
        $model = new TestModel;
        echo $model->getHello();
    }
}


?>
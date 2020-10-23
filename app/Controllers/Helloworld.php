<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($name, $npm)
    {
        //echo $this->name;
        echo $name . "<br>";
        echo $npm . "<br>";
        //echo "Hello Hana";
    }

    public function show()
    {
        echo "Hana Afriliza";
        echo "1817051012";
    }
}

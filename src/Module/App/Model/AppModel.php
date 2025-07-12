<?php

namespace App\Module\App\Model;

use App\DataModel\App;

class AppModel
{
    public function getData()
    {
        return App::select()->one();
    }
}

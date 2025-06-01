<?php

namespace App\Module\Crud\Controller;

use App\DataModel\App;
use System\Core\Base\Controller\RestController;

class CrudController extends RestController
{
    public string $modelClass = App::class;
}

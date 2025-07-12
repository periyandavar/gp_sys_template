<?php

use App\Module\Crud\Controller\CrudController;
use Router\APIRoute;

return [
    new APIRoute('/crud', CrudController::class)
];

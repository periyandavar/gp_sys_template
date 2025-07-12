<?php

namespace App\DataModel\Response;

use System\Core\Data\DataModel;

class ErrorModel extends DataModel
{
    public $message;
    public $data;
    public $code;
}

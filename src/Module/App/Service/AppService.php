<?php

namespace App\Module\App\Service;

use App\Module\App\Model\AppModel;
use Loader\Container;
use Router\Request\Request;

class AppService
{
    public function getSampleData()
    {
        $request = Container::get(Request::class);
        $appModel = new AppModel();

        return [
            'request' => $request->get(),
            'app_data' => $appModel->getData(),
        ];
    }
}

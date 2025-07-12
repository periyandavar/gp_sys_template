<?php

namespace App\Module\App\Service;

use App\Module\App\Model\AppModel;
use Loader\Container;

class AppService
{
    public function getSampleData()
    {
        $request = Container::get('request');
        $appModel = new AppModel();

        return [
            'request' => $request->get(),
            'app_data' => $appModel->getData(),
        ];
    }
}

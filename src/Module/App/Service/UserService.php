<?php

namespace App\Module\App\Service;

use App\DataModel\Response\UserModel;
use App\DataModel\Response\WelcomeModel;
use Loader\Container;

class UserService
{
    public function getWelcomeMessage()
    {
        /**
         * @var UserModel
         */
        $userModel = Container::get(UserModel::class);
        $appService = Container::get('appService');
        $data = $appService->getSampleData();
        $welcomeModel = new WelcomeModel();
        $welcomeModel->message = 'Welcome, ' . $userModel->username . '! ';
        $welcomeModel->data = $data;

        return $welcomeModel;
    }
}

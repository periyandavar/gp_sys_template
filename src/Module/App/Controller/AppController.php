<?php

namespace App\Module\App\Controller;

use App\DataModel\Response\ErrorModel;
use App\DataModel\Response\UserModel;
use App\Module\App\Service\UserService;
use App\Module\App\View\AppView;
use Loader\Container;
use System\Core\Base\Controller\WebController;
use System\Core\Http\Request\Request;
use System\Core\Http\Response\Response;

class AppController extends WebController
{
    public function index(Request $request, Response $response)
    {
        $appService = $this->load->service->app;
        $data = $appService->getSampleData();
        $data = ['status' => 'success', 'message' => 'Welcome to the App Controller', 'data' => $data];
        $response->setType(Response::TYPE_JSON);
        $response->setBody($data);
    }

    public function user(UserModel $userModel)
    {
        /**
         * @var Response
         */
        $response = Container::get('response');
        $this->module->getLoader()->service(UserService::class, 'user');
        if (! $userModel->validate()) {
            $response->setStatusCode(400);
            $errorModel = new ErrorModel();
            $errorModel->message = 'Validation failed for WelcomeModel.';
            $errorModel->code = 400;
            $errorModel->data = $userModel->getError();

            return $errorModel;
        }
        $result = $this->load->service->user->getWelcomeMessage();

        return $result;
    }

    public function indexPage(Request $request, Response $response)
    {
        $view = new AppView();
        $view->addContents($view->getHomePage());

        return $view->get();
    }

    public function indexPage2(Response $response)
    {
        $this->addLayout('header', true);
        $this->addStyle('loader.css', true);
        $this->addView('login', [
            'heading' => 'Easily build your web application faster and more effectively with the GP Sys Simple PHP Framework.'
        ], true);
        $this->addLayout('home', true);
        $this->addLayout('footer', true);

        return $this->getView()->get();
    }
}

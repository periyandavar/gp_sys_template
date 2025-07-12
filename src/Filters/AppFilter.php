<?php

namespace App\Filters;

use Router\Filter\Filter;
use System\Core\Utility;

class AppFilter implements Filter
{
    /**
     * Filter the request and response.
     *
     * @param \Router\Request\Request   $request
     * @param \Router\Response\Response $response
     *
     * @return bool
     */
    public function filter(\Router\Request\Request $request, \Router\Response\Response $response): bool
    {
        if (!$request->hasHeader('X-App-Token')) {
            $response->setStatusCode(400);
            $response->setBody(['error' => 'Missing X-App-Token header']);

            return false;
        }

        $token = $request->header('X-App-Token');

        if ($token !== Utility::getCsrfToken()) {
            $response->setStatusCode(403);
            $response->setBody(['error' => 'Invalid X-App-Token']);

            return false;
        }

        return true;
    }
}

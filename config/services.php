<?php

use Logger\Log;
use System\Core\Base\Log\Logger;
use System\Core\Utility;

return [
    'log' => [
        'class' => Logger::class,
        'params' => [
            'logger' => [
                'class' => Log::class,
                'params' => [
                    'level' => 'ALL',
                    'config' => Utility::getContext()->getConfig()->getAsConfig('logs')
                ]
            ],
            'ignore_context_keys' => []
        ],
        'singleton' => true
    ]
];

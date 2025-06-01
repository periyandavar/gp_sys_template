<?php

namespace App\Module\App\View;

use System\Core\Base\View\View;

class AppView extends View
{
    public function getHeaderContent(): array
    {
        return [
            [
                'layout' => 'header',
                'style' => ['loader.css'],
            ]
        ];
    }

    public function getFooterContent(): array
    {
        return [
            [
                'layout' => 'footer',
            ]
        ];
    }

    public function getHomePage()
    {
        return [
            ['view' => [
                'login',
                [
                    'heading' => 'Easily build your web application faster and more effectively with the GP Sys Simple PHP Framework.'
                ]
                ],

            'layout' => ['home'],]

        ];
    }
}

//  $this->addView('login', [
//             'heading' => 'Easily build your web application faster and more effectively with the GP Sys Simple PHP Framework.'
//         ], true);
//         $this->addLayout('home', true);

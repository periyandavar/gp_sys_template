<?php

namespace App\DataModel\Response;

use System\Core\Data\DataModel;

class UserModel extends DataModel
{
    public $username;

    public function getRules()
    {
        return [
            'username' => [
                ['required',
                ['length', ['min' => 5, 'max' => 20]],
                'alphaspace'],
                [
                    'required' => 'Username is required.',
                    'length' => [
                        'min' => 'Username must be at least 5 characters long.',
                        'max' => 'Username must not exceed 20 characters.',
                    ],
                    'alphaspace' => 'Username must contain only letters and spaces.'
                ]
            ],
        ];
    }
}

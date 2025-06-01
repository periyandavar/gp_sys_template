<?php

namespace App\DataModel;

use System\Core\Data\DataRecord;

class App extends DataRecord
{
    /**
     * @var int $id
     */
    public $id;

    /**
     * @var string $name
     */
    public $name;

    /**
     * @var string $version
     */
    public $version;

    /**
     * @var string $description
     */
    public $description;

    /**
     * @var string $author
     */
    public $author;

    public $created_at;
    public $updated_at;

    public function table(): string
    {
        return 'app';
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public function skipInsertOn()
    {
        return [
            'id',
            'created_at',
            'updated_at'
        ];
    }

    public function skipUpdateOn()
    {
        return [
            'id',
            'created_at',
            'updated_at'
        ];
    }

    public function useDelete()
    {
        return [];
    }

    public function getRules()
    {
        return [
            'name' => [['required', 'alphaspace', ['length', ['min' => 3, 'max' => 50]]]],
            'version' => [['required', 'numeric', ['length', ['min' => 1, 'max' => 20]]]],
            'description' => [['required']],
            'author' => [['required', 'alphaspace', ['length', ['min' => 3, 'max' => 50]]]],
        ];
    }
}

<?php
namespace Muffin\Tags\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class MuffinsFixture extends TestFixture
{
    public $table = 'tags_muffins';

    public $fields = [
        'id' => ['type' => 'uuid', 'null' => false],
        'name' => ['type' => 'string', 'length' => 255],
        'tag_count' => ['type' => 'integer', 'null' => true, 'default' => 0],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']],
        ],
    ];

    public $records = [
        [
            'id' => '153e136f-6a9f-47f7-a26c-c4df71c71ab1',
            'name' => 'blue',
            'tag_count' => 2,
        ],
        [
            'id' => 'b63fc187-dcd1-47bf-81bb-56022de7c57e',
            'name' => 'red',
            'tag_count' => 1,
        ],
    ];
}

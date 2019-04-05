<?php
namespace Muffin\Tags\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class BunsFixture extends TestFixture
{
    public $table = 'tags_buns';

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
            'id' => '2890e42c-03de-4894-895b-2c1836db9079',
            'name' => 'square',
            'tag_count' => 1,
        ],
        [
            'id' => 'ec8dbd55-433b-4ef6-ae3a-b8fae073bfff',
            'name' => 'round',
            'tag_count' => 1,
        ],
    ];
}

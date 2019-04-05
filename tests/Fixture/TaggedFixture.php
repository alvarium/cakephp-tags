<?php
namespace Muffin\Tags\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class TaggedFixture extends TestFixture
{
    public $table = 'tags_tagged';

    public $fields = [
        'id' => ['type' => 'uuid', 'null' => false],
        'tag_id' => ['type' => 'uuid', 'null' => false],
        'fk_id' => ['type' => 'uuid', 'null' => false],
        'fk_table' => ['type' => 'string', 'limit' => 255, 'null' => false],
        'created' => ['type' => 'datetime', 'null' => true],
        'modified' => ['type' => 'datetime', 'null' => true],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']],
        ],
    ];

    public $records = [
        [
            'tag_id' => 'efe1289b-c68c-40b4-87d6-57a0829f8fce',
            'fk_id' => '153e136f-6a9f-47f7-a26c-c4df71c71ab1',
            'fk_table' => 'tags_muffins',
        ],
        [
            'tag_id' => '09a50a33-b44f-4dd5-a1ab-a7751b20cc5c',
            'fk_id' => '153e136f-6a9f-47f7-a26c-c4df71c71ab1',
            'fk_table' => 'tags_muffins',
        ],
        [
            'tag_id' => 'efe1289b-c68c-40b4-87d6-57a0829f8fce',
            'fk_id' => 'b63fc187-dcd1-47bf-81bb-56022de7c57e',
            'fk_table' => 'tags_muffins',
        ],
        [
            'tag_id' => 'efe1289b-c68c-40b4-87d6-57a0829f8fce',
            'fk_id' => '2890e42c-03de-4894-895b-2c1836db9079',
            'fk_table' => 'tags_buns',
        ],
        [
            'tag_id' => '09a50a33-b44f-4dd5-a1ab-a7751b20cc5c',
            'fk_id' => 'ec8dbd55-433b-4ef6-ae3a-b8fae073bfff',
            'fk_table' => 'tags_buns',
        ],
    ];

    public function init()
    {
        $created = $modified = date('Y-m-d H:i:s');
        array_walk($this->records, function (&$record) use ($created, $modified) {
            $record += compact('created', 'modified');
        });
        parent::init();
    }
}

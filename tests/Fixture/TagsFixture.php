<?php
namespace Muffin\Tags\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class TagsFixture extends TestFixture
{
    public $table = 'tags_tags';

    public $fields = [
        'id' => ['type' => 'uuid', 'null' => false],
        'namespace' => ['type' => 'string', 'length' => 255, 'null' => true],
        'tag_key' => ['type' => 'string', 'length' => 255],
        'slug' => ['type' => 'string', 'length' => 255],
        'label' => ['type' => 'string', 'length' => 255],
        'counter' => ['type' => 'integer', 'unsigned' => true, 'default' => 0, 'null' => true],
        'created' => ['type' => 'datetime', 'null' => true],
        'modified' => ['type' => 'datetime', 'null' => true],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']],
        ],
    ];

    public $records = [
        [
            'id' => 'efe1289b-c68c-40b4-87d6-57a0829f8fce',
            'namespace' => null,
            'tag_key' => 'color',
            'slug' => 'color',
            'label' => 'Color',
            'counter' => 3,
        ],
        [
            'id' => '09a50a33-b44f-4dd5-a1ab-a7751b20cc5c',
            'namespace' => null,
            'tag_key' => 'dark-color',
            'slug' => 'dark-color',
            'label' => 'Dark Color',
            'counter' => 2,
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

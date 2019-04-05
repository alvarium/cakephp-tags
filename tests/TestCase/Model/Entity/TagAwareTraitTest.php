<?php
namespace Muffin\Tags\Test\TestCase\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Muffin\Tags\Model\Entity\TagAwareTrait;

class TagsMuffin extends Entity
{
    use TagAwareTrait;

    public function source($source = null)
    {
        return 'Muffin/Tags.Muffins';
    }
}

class TagAwareTraitTest extends TestCase
{
    public $fixtures = [
        'plugin.Muffin/Tags.Muffins',
        'plugin.Muffin/Tags.Tagged',
        'plugin.Muffin/Tags.Tags',
    ];

    public function setUp()
    {
        parent::setUp();

        $table = TableRegistry::getTableLocator()->get('Muffin/Tags.Muffins', ['table' => 'tags_muffins']);
        $table->addBehavior('Muffin/Tags.Tag');

        $this->Table = $table;
        $this->Behavior = $table->behaviors()->Tag;
    }

    public function tearDown()
    {
        parent::tearDown();
        TableRegistry::getTableLocator()->clear();
        unset($this->Behavior);
    }

    public function testTag()
    {
        $count = $this->Table->get('153e136f-6a9f-47f7-a26c-c4df71c71ab1')->tag_count;

        $entity = new TagsMuffin(['id' => '153e136f-6a9f-47f7-a26c-c4df71c71ab1']);
        $entity->tag('new');
        $this->assertEquals($count + 1, $this->Table->get('153e136f-6a9f-47f7-a26c-c4df71c71ab1')->tag_count);
    }

    public function testUntag()
    {
        $entity = new TagsMuffin(['id' => '153e136f-6a9f-47f7-a26c-c4df71c71ab1']);
        $entity->untag('Color');
        $this->assertEquals(1, $this->Table->get('153e136f-6a9f-47f7-a26c-c4df71c71ab1')->tag_count);
    }
}

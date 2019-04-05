<?php


use Migrations\AbstractMigration;

class IdToUuid extends AbstractMigration
{

    public function change()
    {
        $this->table('tags_tags')
            ->changeColumn('id', 'uuid')
            ->update()
        ;

        $this->table('tags_tagged')
            ->changeColumn('id', 'uuid')
            ->changeColumn('tag_id', 'uuid')
            ->changeColumn('fk_id', 'uuid')
            ->update()
        ;
    }
}

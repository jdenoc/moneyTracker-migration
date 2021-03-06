<?php

use Phinx\Migration\AbstractMigration;

class AddAttachmentsColumnStamp extends AbstractMigration {

    /**
     * Change Method.
     * Adds a stamp column to the attachments table
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change(){
        $table = $this->table('attachments');
        $table->addColumn('stamp', 'timestamp', array('default'=>'CURRENT_TIMESTAMP'));
        $table->update();
    }
}
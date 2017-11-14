<?php

use batsg\migrations\BaseMigrationCreateTable;

/**
 * Handles the creation of table `company`.
 */
class m171006_073101_create_company_table extends BaseMigrationCreateTable
{
    protected $table = 'company';

    protected function createDbTable()
    {
        $this->createTableWithExtraFields($this->table, [
            'id' => $this->primaryKey(),
            'name' => [$this->text(), 'Company name'],
        ]);
    }
}

<?php

use batsg\migrations\BaseMigrationCreateTable;

/**
 * Handles the creation of table `employee`.
 */
class m171006_073102_create_employee_table extends BaseMigrationCreateTable
{
    protected $table = 'employee';

    protected function createDbTable()
    {
        $this->createTableWithExtraFields($this->table, [
            'id' => $this->primaryKey(),
            'company_id' => [$this->referenceColumn('company'), 'Company'],
            'name' => [$this->text(), 'Employee name'],
        ]);
    }
}

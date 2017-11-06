<?php

use batsg\migrations\BaseMigrationCreateTable;

/**
 * Handles the creation of table `encrypt_demo`.
 */
class m171006_073099_create_emcrypt_demo_table extends BaseMigrationCreateTable
{
    protected $table = 'encrypt_demo';

    protected function createDbTable()
    {
        $this->createTableWithExtraFields($this->table, [
            'id' => $this->primaryKey(),
            'date_field_encrypt' => $this->text(),
            'string_field_encrypt' => $this->text(),
            'integer_field_encrypt' => $this->text(),
            'float_field_encrypt' => $this->text(),
        ]);
    }
}

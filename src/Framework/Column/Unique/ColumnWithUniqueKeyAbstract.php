<?php

namespace ThinQC\Schema\Framework\Column\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @internal
 */
abstract class ColumnWithUniqueKeyAbstract
    extends TableSchemaAbstract
{
    abstract public function foreign(string $tableName, string $foreignKeyName): ColumnWithUniqueKeyForeignKeyInitial;
}
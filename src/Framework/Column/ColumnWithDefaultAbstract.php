<?php

namespace ThinQC\Schema\Framework\Column;

use ThinQC\Schema\Framework\Column\Primary\ColumnWithPrimaryKeyAbstract;
use ThinQC\Schema\Framework\Column\Unique\ColumnWithUniqueKeyAbstract;
use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read ColumnWithUniqueKeyAbstract $unique
 * @property-read ColumnWithPrimaryKeyAbstract $primary
 *
 * @internal
 */
abstract class ColumnWithDefaultAbstract
    extends TableSchemaAbstract
{
    abstract public function foreign(string $tableName, string $foreignKeyName): ColumnForeignKeyInitial;
}
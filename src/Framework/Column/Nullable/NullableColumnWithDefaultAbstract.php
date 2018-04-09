<?php

namespace ThinQC\Schema\Framework\Column\Nullable;

use ThinQC\Schema\Framework\Column\Nullable\Unique\NullableColumnWithUniqueKeyAbstract;
use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read NullableColumnWithUniqueKeyAbstract $unique
 *
 * @internal
 */
abstract class NullableColumnWithDefaultAbstract
    extends TableSchemaAbstract
{
    abstract public function foreign(string $tableName, string $foreignKeyName): NullableColumnForeignKeyInitial;
}
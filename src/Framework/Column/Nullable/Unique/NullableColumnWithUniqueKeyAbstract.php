<?php

namespace ThinQC\Schema\Framework\Column\Nullable\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @internal
 */
abstract class NullableColumnWithUniqueKeyAbstract
    extends TableSchemaAbstract
{
    abstract public function foreign(string $tableName, string $foreignKeyName): NullableColumnWithUniqueKeyForeignKeyInitial;
}
<?php

namespace ThinQC\Schema\Framework\Column\Nullable\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read  NullableColumnWithUniqueKeyOnDeleteAbstract $cascadeOnDelete
 * @property-read  NullableColumnWithUniqueKeyOnDeleteAbstract $setNullOnDelete
 * @property-read  NullableColumnWithUniqueKeyOnDeleteAbstract $noActionOnDelete
 * @property-read  NullableColumnWithUniqueKeyOnDeleteAbstract $restrictOnDelete
 * @property-read  NullableColumnWithUniqueKeyOnUpdateAbstract $cascadeOnUpdate
 * @property-read  NullableColumnWithUniqueKeyOnUpdateAbstract $setNullOnUpdate
 * @property-read  NullableColumnWithUniqueKeyOnUpdateAbstract $noActionOnUpdate
 * @property-read  NullableColumnWithUniqueKeyOnUpdateAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class NullableColumnWithUniqueKeyForeignKeyInitial
    extends TableSchemaAbstract
{
}
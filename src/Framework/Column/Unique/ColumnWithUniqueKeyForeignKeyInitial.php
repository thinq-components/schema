<?php

namespace ThinQC\Schema\Framework\Column\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read ColumnWithUniqueKeyOnDeleteAbstract $cascadeOnDelete
 * @property-read ColumnWithUniqueKeyOnDeleteAbstract $setNullOnDelete
 * @property-read ColumnWithUniqueKeyOnDeleteAbstract $noActionOnDelete
 * @property-read ColumnWithUniqueKeyOnDeleteAbstract $restrictOnDelete
 * @property-read ColumnWithUniqueKeyOnUpdateAbstract $cascadeOnUpdate
 * @property-read ColumnWithUniqueKeyOnUpdateAbstract $setNullOnUpdate
 * @property-read ColumnWithUniqueKeyOnUpdateAbstract $noActionOnUpdate
 * @property-read ColumnWithUniqueKeyOnUpdateAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class ColumnWithUniqueKeyForeignKeyInitial
    extends TableSchemaAbstract
{

}
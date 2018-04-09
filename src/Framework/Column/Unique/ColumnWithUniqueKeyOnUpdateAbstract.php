<?php

namespace ThinQC\Schema\Framework\Column\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read TableSchemaAbstract $cascadeOnDelete
 * @property-read TableSchemaAbstract $noActionOnDelete
 * @property-read TableSchemaAbstract $restrictOnDelete
 *
 * @internal
 */
abstract class ColumnWithUniqueKeyOnUpdateAbstract
    extends TableSchemaAbstract
{
}
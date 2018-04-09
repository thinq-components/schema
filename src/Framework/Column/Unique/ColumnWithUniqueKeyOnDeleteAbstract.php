<?php

namespace ThinQC\Schema\Framework\Column\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read TableSchemaAbstract $cascadeOnUpdate
 * @property-read TableSchemaAbstract $noActionOnUpdate
 * @property-read TableSchemaAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class ColumnWithUniqueKeyOnDeleteAbstract
    extends TableSchemaAbstract
{
}
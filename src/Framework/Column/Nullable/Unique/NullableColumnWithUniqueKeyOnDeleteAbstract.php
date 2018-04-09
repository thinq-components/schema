<?php

namespace ThinQC\Schema\Framework\Column\Nullable\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read TableSchemaAbstract $cascadeOnUpdate
 * @property-read TableSchemaAbstract $setNullOnUpdate
 * @property-read TableSchemaAbstract $noActionOnUpdate
 * @property-read TableSchemaAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class NullableColumnWithUniqueKeyOnDeleteAbstract
    extends TableSchemaAbstract
{
}
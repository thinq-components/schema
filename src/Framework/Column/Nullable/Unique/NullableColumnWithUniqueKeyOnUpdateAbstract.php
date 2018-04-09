<?php

namespace ThinQC\Schema\Framework\Column\Nullable\Unique;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read TableSchemaAbstract $cascadeOnDelete
 * @property-read TableSchemaAbstract $setNullOnDelete
 * @property-read TableSchemaAbstract $noActionOnDelete
 * @property-read TableSchemaAbstract $restrictOnDelete
 *
 * @internal
 */
abstract class NullableColumnWithUniqueKeyOnUpdateAbstract
    extends TableSchemaAbstract
{

}
<?php

namespace ThinQC\Schema\Framework\NewKey;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read TableSchemaAbstract $cascadeOnDelete
 * @property-read TableSchemaAbstract $setNullOnDelete
 * @property-read TableSchemaAbstract $noActionOnDelete
 * @property-read TableSchemaAbstract $restrictOnDelete
 *
 * @internal
 */
abstract class CompositeOnUpdateAbstract
    extends TableSchemaAbstract
{
}
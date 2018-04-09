<?php

namespace ThinQC\Schema\Framework\NewKey;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read TableSchemaAbstract $cascadeOnUpdate
 * @property-read TableSchemaAbstract $setNullOnUpdate
 * @property-read TableSchemaAbstract $noActionOnUpdate
 * @property-read TableSchemaAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class CompositeOnDeleteAbstract
    extends TableSchemaAbstract
{

}
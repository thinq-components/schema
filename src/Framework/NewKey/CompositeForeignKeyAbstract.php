<?php

namespace ThinQC\Schema\Framework\NewKey;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read CompositeOnDeleteAbstract $cascadeOnDelete
 * @property-read CompositeOnDeleteAbstract $setNullOnDelete
 * @property-read CompositeOnDeleteAbstract $noActionOnDelete
 * @property-read CompositeOnDeleteAbstract $restrictOnDelete
 * @property-read CompositeOnUpdateAbstract $cascadeOnUpdate
 * @property-read CompositeOnUpdateAbstract $setNullOnUpdate
 * @property-read CompositeOnUpdateAbstract $noActionOnUpdate
 * @property-read CompositeOnUpdateAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class CompositeForeignKeyAbstract
    extends TableSchemaAbstract
    implements CompositeForeignKeyInterface
{

}
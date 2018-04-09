<?php

namespace ThinQC\Schema\Framework\Column\Foreign;

use ThinQC\Schema\Framework\TableSchemaAbstract;


/**
 * @property-read TableSchemaAbstract $unique
 * @property-read ColumnWithForeignKeyWithPrimaryKeyAbstract $primary
 *
 * @internal
 */
abstract class ColumnWithForeignKeyAbstract
    extends TableSchemaAbstract
{
}
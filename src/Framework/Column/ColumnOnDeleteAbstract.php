<?php

namespace ThinQC\Schema\Framework\Column;

use ThinQC\Schema\Framework\Column\Foreign\ColumnWithForeignKeyAbstract;


/**
 * @property-read ColumnWithForeignKeyAbstract $cascadeOnUpdate
 * @property-read ColumnWithForeignKeyAbstract $noActionOnUpdate
 * @property-read ColumnWithForeignKeyAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class ColumnOnDeleteAbstract
    extends ColumnWithForeignKeyAbstract
{

}
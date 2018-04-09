<?php

namespace ThinQC\Schema\Framework\Column;

use ThinQC\Schema\Framework\Column\Foreign\ColumnWithForeignKeyAbstract;


/**
 * @property-read ColumnWithForeignKeyAbstract $cascadeOnDelete
 * @property-read ColumnWithForeignKeyAbstract $noActionOnDelete
 * @property-read ColumnWithForeignKeyAbstract $restrictOnDelete
 *
 * @internal
 */
abstract class ColumnOnUpdateAbstract
    extends ColumnWithForeignKeyAbstract
{

}
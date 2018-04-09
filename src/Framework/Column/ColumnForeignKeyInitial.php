<?php

namespace ThinQC\Schema\Framework\Column;

use ThinQC\Schema\Framework\Column\Foreign\ColumnWithForeignKeyAbstract;


/**
 * @property-read ColumnOnDeleteAbstract $cascadeOnDelete
 * @property-read ColumnOnDeleteAbstract $noActionOnDelete
 * @property-read ColumnOnDeleteAbstract $restrictOnDelete
 * @property-read ColumnOnUpdateAbstract $cascadeOnUpdate
 * @property-read ColumnOnUpdateAbstract $noActionOnUpdate
 * @property-read ColumnOnUpdateAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class ColumnForeignKeyInitial
    extends ColumnWithForeignKeyAbstract
{
}
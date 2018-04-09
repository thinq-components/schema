<?php

namespace ThinQC\Schema\Framework\Column\Nullable;

use ThinQC\Schema\Framework\Column\Nullable\Foreign\NullableColumnWithForeignKeyAbstract;


/**
 * @property-read NullableColumnOnDeleteAbstract $cascadeOnDelete
 * @property-read NullableColumnOnDeleteAbstract $setNullOnDelete
 * @property-read NullableColumnOnDeleteAbstract $noActionOnDelete
 * @property-read NullableColumnOnDeleteAbstract $restrictOnDelete
 * @property-read NullableColumnOnUpdateAbstract $cascadeOnUpdate
 * @property-read NullableColumnOnUpdateAbstract $setNullOnUpdate
 * @property-read NullableColumnOnUpdateAbstract $noActionOnUpdate
 * @property-read NullableColumnOnUpdateAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class NullableColumnForeignKeyInitial
    extends NullableColumnWithForeignKeyAbstract
{
}
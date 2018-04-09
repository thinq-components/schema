<?php

namespace ThinQC\Schema\Framework\Column\Nullable;

use ThinQC\Schema\Framework\Column\Nullable\Foreign\NullableColumnWithForeignKeyAbstract;


/**
 * @property-read NullableColumnWithForeignKeyAbstract $cascadeOnUpdate
 * @property-read NullableColumnWithForeignKeyAbstract $setNullOnUpdate
 * @property-read NullableColumnWithForeignKeyAbstract $noActionOnUpdate
 * @property-read NullableColumnWithForeignKeyAbstract $restrictOnUpdate
 *
 * @internal
 */
abstract class NullableColumnOnDeleteAbstract
    extends NullableColumnWithForeignKeyAbstract
{
}
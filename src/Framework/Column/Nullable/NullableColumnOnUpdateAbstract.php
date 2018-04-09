<?php

namespace ThinQC\Schema\Framework\Column\Nullable;

use ThinQC\Schema\Framework\Column\Nullable\Foreign\NullableColumnWithForeignKeyAbstract;


/**
 * @property-read NullableColumnWithForeignKeyAbstract $cascadeOnDelete
 * @property-read NullableColumnWithForeignKeyAbstract $setNullOnDelete
 * @property-read NullableColumnWithForeignKeyAbstract $noActionOnDelete
 * @property-read NullableColumnWithForeignKeyAbstract $restrictOnDelete
 *
 * @internal
 */
abstract class NullableColumnOnUpdateAbstract
    extends NullableColumnWithForeignKeyAbstract
{
}
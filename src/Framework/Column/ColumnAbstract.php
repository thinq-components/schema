<?php

namespace ThinQC\Schema\Framework\Column;

use ThinQC\Schema\Framework\Column\Nullable\NullableColumnAbstract;


/**
 * @property-read NullableColumnAbstract $nullable
 *
 * @internal
 */
abstract class ColumnAbstract
    extends ColumnWithDefaultAbstract
{
    abstract public function default($defaultValue): ColumnWithDefaultAbstract;
}
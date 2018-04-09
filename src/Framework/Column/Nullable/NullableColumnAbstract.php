<?php

namespace ThinQC\Schema\Framework\Column\Nullable;


/**
 * @internal
 */
abstract class NullableColumnAbstract
    extends NullableColumnWithDefaultAbstract
{
    abstract public function default($defaultValue): NullableColumnWithDefaultAbstract;
}
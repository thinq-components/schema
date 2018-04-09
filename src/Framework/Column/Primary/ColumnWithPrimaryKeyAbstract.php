<?php

namespace ThinQC\Schema\Framework\Column\Primary;

use ThinQC\Schema\Framework\Column\Unique\ColumnWithUniqueKeyAbstract;


/**
 * @property-read ColumnWithUniqueKeyAbstract $autoIncrement
 *
 * @internal
 */
abstract class ColumnWithPrimaryKeyAbstract
    extends ColumnWithUniqueKeyAbstract
{
}
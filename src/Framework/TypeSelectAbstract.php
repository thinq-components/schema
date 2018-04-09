<?php

namespace ThinQC\Schema\Framework;

use ThinQC\Schema\Framework\Column\ColumnAbstract;


/**
 * @property-read TableSchemaAbstract $autoTimestamp
 * 
 * @internal
 */
abstract class TypeSelectAbstract
{
    abstract public function int8(string $columnName): ColumnAbstract;
    abstract public function int16(string $columnName): ColumnAbstract;
    abstract public function int24(string $columnName): ColumnAbstract;
    abstract public function int32(string $columnName): ColumnAbstract;
    abstract public function int64(string $columnName): ColumnAbstract;

    abstract public function float(string $columnName): ColumnAbstract;
    abstract public function double(string $columnName): ColumnAbstract;

    abstract public function string(string $columnName, int $length = 255): ColumnAbstract;

    abstract public function timestamp(string $columnName): ColumnAbstract;

    abstract public function enum(string $columnName, string ...$enums): ColumnAbstract;

    abstract public function text8(string $columnName): ColumnAbstract;
    abstract public function text16(string $columnName): ColumnAbstract;
    abstract public function text24(string $columnName): ColumnAbstract;
    abstract public function text32(string $columnName): ColumnAbstract;

    abstract public function blob8(string $columnName): ColumnAbstract;
    abstract public function blob16(string $columnName): ColumnAbstract;
    abstract public function blob24(string $columnName): ColumnAbstract;
    abstract public function blob32(string $columnName): ColumnAbstract;
}
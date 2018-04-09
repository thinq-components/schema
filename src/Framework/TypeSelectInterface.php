<?php

namespace ThinQC\Schema\Framework;

use ThinQC\Schema\Framework\Column\ColumnAbstract;


interface TypeSelectInterface
{
    public function int8(string $columnName): ColumnAbstract;
    public function int16(string $columnName): ColumnAbstract;
    public function int24(string $columnName): ColumnAbstract;
    public function int32(string $columnName): ColumnAbstract;
    public function int64(string $columnName): ColumnAbstract;

    public function float(string $columnName): ColumnAbstract;
    public function double(string $columnName): ColumnAbstract;

    public function string(string $columnName, int $length = 255): ColumnAbstract;

    public function timestamp(string $columnName): ColumnAbstract;

    public function enum(string $columnName, string ...$enums): ColumnAbstract;

    public function text8(string $columnName): ColumnAbstract;
    public function text16(string $columnName): ColumnAbstract;
    public function text24(string $columnName): ColumnAbstract;
    public function text32(string $columnName): ColumnAbstract;

    public function blob8(string $columnName): ColumnAbstract;
    public function blob16(string $columnName): ColumnAbstract;
    public function blob24(string $columnName): ColumnAbstract;
    public function blob32(string $columnName): ColumnAbstract;
}
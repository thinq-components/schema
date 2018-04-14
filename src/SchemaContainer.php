<?php

namespace ThinQC\Schema;

use PDO;
use ThinQC\Schema\Key\KeyInterface;


class SchemaContainer
{
    public const TYPE_INT8   = 0;
    public const TYPE_INT16  = 1;
    public const TYPE_INT24  = 2;
    public const TYPE_INT32  = 3;
    public const TYPE_INT64  = 4;
    public const TYPE_UINT8  = 5;
    public const TYPE_UINT16 = 6;
    public const TYPE_UINT24 = 7;
    public const TYPE_UINT32 = 8;
    public const TYPE_UINT64 = 9;

    public function __construct(PDO $pdo)
    {

    }

    public function withPrimaryColumn(
        string $columnName,
        int $columnType,
        bool $autoIncrement
    ): self {

    }

    public function withIntegerColumn(
        string $columnName,
        int $columnType,
        bool $nullable,
        ?int $default
    ): self {

    }

    public function withVarcharColumn(
        string $columnName,
        int $length,
        bool $nullable,
        ?string $default
    ): self {

    }

    public function withEnumColumn(
        string $columnName,
        bool $nullable,
        ?string $default,
        string ...$candidates
    ): self {

    }

    public function withTimestampColumn(
        string $columnName,
        bool $nullable,
        ?string $default
    ): self {

    }

    public function withAutoTimestamp(): self
    {

    }

    public function withUniqueKey(
        KeyInterface ...$keys
    ): self {

    }

    public function withIndex(
        KeyInterface ...$keys
    ): self {

    }

    public function withForeignKey(
        string $columnName,
        string $foreignTable,
        string $foreignColumn
    ): self {

    }

    public function createTable(): void
    {

    }
}
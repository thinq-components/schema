<?php

namespace ThinQC\Schema\Framework;

use ThinQC\Schema\Framework\NewKey\PrimaryKeyAbstract;
use ThinQC\Schema\Framework\NewKey\ForeignKeyInterface;


/**
 * @property-read int $create
 */
abstract class TableSchemaAbstract
    implements TypeSelectInterface
{
    abstract public function create(): void;
    abstract public function primaryKey(string $columnName): PrimaryKeyAbstract;
    abstract public function compositePrimaryKey(string ...$columnNames): self;
    abstract public function uniqueKey(string ...$columnNames): self;
    abstract public function foreignKey(string $tableName): ForeignKeyInterface;
}
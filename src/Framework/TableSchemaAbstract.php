<?php

namespace ThinQC\Schema\Framework;

use ThinQC\Schema\Framework\NewKey\CompositeForeignKeyInterface;


/**
 * @property-read int $create
 *
 * @internal
 */
abstract class TableSchemaAbstract
    extends TypeSelectAbstract
{
    abstract public function __construct();
    abstract public function compositePrimaryKey(string ...$columnNames): self;
    abstract public function compositeUniqueKey(string ...$columnNames): self;
    abstract public function compositeForeignKey(string $tableName): CompositeForeignKeyInterface;
}
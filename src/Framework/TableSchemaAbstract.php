<?php

namespace ThinQC\Schema\Framework;



/**
 * @property-read int $create
 */
abstract class TableSchemaAbstract
    implements TypeSelectInterface
{
    abstract public function compositePrimaryKey(string ...$columnNames): self;
    abstract public function compositeUniqueKey(string ...$columnNames): self;
}
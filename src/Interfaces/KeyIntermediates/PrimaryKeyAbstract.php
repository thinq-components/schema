<?php

namespace ThinQC\Schema;


/**
 * @property-read TableSchemaInterface $autoIncrement
 */
abstract class PrimaryKeyAbstract
    implements TableSchemaInterface
{
    abstract public function autoIncrement(): TableSchemaInterface;
}
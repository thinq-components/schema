<?php

namespace ThinQC\Schema;


interface TableSchemaInterface
{
    public function primaryKey(string $column): PrimaryKeyAbstract;
    public function compositePrimaryKey(string ...$columns): self;
    public function uniqueKey(string ...$columns): self;
    public function foreignKey(string $column);
}
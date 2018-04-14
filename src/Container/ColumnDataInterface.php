<?php

namespace ThinQC\Schema\Container;


interface ColumnDataInterface
{
    public function getPreparedStatement(): string;

    public function getVariables(): array;
}
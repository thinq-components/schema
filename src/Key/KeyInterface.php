<?php

namespace ThinQC\Schema\Key;


interface KeyInterface
{
    public function getColumnName(): string;

    public function getLength(): ?int;
}
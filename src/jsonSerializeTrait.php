<?php

namespace SlimCD;

trait jsonSerializeTrait
{
    public function jsonSerialize()
    {
        return (get_object_vars($this));
    }
}

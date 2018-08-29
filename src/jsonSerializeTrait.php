<?php

namespace SlimCD;

trait jsonSerializeTrait
{
    /**
     * Returns the instantiated class's properties as an array.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

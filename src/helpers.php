<?php

if (! function_exists('fof')) {
    /**
     * Auto find or fail, When pass class and id.
     *
     * @param string $class
     * @param \Illuminate\Database\Eloquent\Model|int $value
     * @return mixed
     */
    function fof($class, $value)
    {
        if ($value instanceof $class) {
            return $value;
        }

        return $class::findOrFail($value);
    }
}

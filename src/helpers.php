<?php

if (! function_exists('fof')) {
    /**
     * Auto find or fail, When pass class and id.
     *
     * @param string $class
     * @param \Illuminate\Database\Eloquent\Model|int $value
     * @return mixed
     *
     * @throws Exception
     */
    function fof($class, $value)
    {
        if ($value instanceof $class) {
            return $value;
        } elseif (ctype_digit($value)) {
            return $class::findOrFail($value);
        }

        throw new Exception("Class \"{$class}\" or value \"{$value}\" was not correct.");
    }
}

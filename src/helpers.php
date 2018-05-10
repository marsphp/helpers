<?php

use Mars\Helpers\ArrayHelpers;

/* Array Get */
function array_get($array, $key, $default = null)
{
    return ArrayHelpers::get($array, $key, $default);
}

/* Array First */
function array_first($array, callable $callback = null, $key = null)
{
    return ArrayHelpers::first($array, $callback, $key);
}

/* Array Last */
function array_last($array, callable $callback = null, $key = null)
{
    return ArrayHelpers::last($array, $callback, $key);
}

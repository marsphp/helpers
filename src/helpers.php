<?php

use Mars\Helpers\ArrayHelpers;

function array_get($array, $key, $default = null)
{
    return ArrayHelpers::get($array, $key, $default);
}

<?php

function is_in_array($maybeNeedle, $maybeHaystack)
{
    return gettype($maybeNeedle) == 'array' ?
        in_array($maybeHaystack, $maybeNeedle) : in_array($maybeNeedle, $maybeHaystack);
}

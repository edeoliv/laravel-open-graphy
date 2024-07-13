<?php

if (! function_exists('openGraphy')) {
    function openGraphy(...$args): string
    {
        return \Edeoliv\OpenGraphy\Facades\OpenGraphy::generateUrl(...$args);
    }
}

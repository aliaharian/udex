<?php

if (! function_exists('asset')) {

    function asset($path, $secure = null)
    {
        $nPath = str_replace('public/', '', $path);
        return app('url')->asset($nPath, $secure);
    }
}

<?php

if (! function_exists('getPlugins')) {

    function getPlugins()
    {
        return \App\Models\Plugin::where('status', 'active')->get();
    }

}

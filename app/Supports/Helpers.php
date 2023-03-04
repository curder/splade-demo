<?php

use Illuminate\Pipeline\Pipeline;

if( ! function_exists('pipe')) {

    function pipe($payload, $steps = [])
    {
        return app(Pipeline::class)
            ->send($payload)
            ->through($steps)
            ->thenReturn();
    }
}

if (! function_exists('file_size_for_human')) {

    function file_size_for_human($size): string
    {
        return match (true) {
            $size >= 1024 * 1024 * 1024 => round(($size / (1024 * 1024 * 1024)) * 100) / 100 .' GB',
            $size >= 1024 * 1024 => round(($size / (1024 * 1024)) * 100) / 100 .' MB',
            $size >= 1024 => round(($size / 1024) * 100) / 100 .' KB',
            default => $size.' B',
        };
    }
}

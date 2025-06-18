<?php

if (!function_exists('flash_success')) {
    /**
     * Set a success flash message
     */
    function flash_success($message)
    {
        session()->flash('flash_message', $message);
    }
}

if (!function_exists('flash_error')) {
    /**
     * Set an error flash message
     */
    function flash_error($message)
    {
        session()->flash('flash_error', $message);
    }
}

if (!function_exists('flash_warning')) {
    /**
     * Set a warning flash message
     */
    function flash_warning($message)
    {
        session()->flash('flash_warning', $message);
    }
}

if (!function_exists('flash_info')) {
    /**
     * Set an info flash message
     */
    function flash_info($message)
    {
        session()->flash('flash_info', $message);
    }
}

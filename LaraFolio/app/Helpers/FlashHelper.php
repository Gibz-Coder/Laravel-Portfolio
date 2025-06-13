<?php

namespace App\Helpers;

class FlashHelper
{
    /**
     * Set a success flash message
     */
    public static function success($message)
    {
        session()->flash('flash_message', $message);
    }

    /**
     * Set an error flash message
     */
    public static function error($message)
    {
        session()->flash('flash_error', $message);
    }

    /**
     * Set a warning flash message
     */
    public static function warning($message)
    {
        session()->flash('flash_warning', $message);
    }

    /**
     * Set an info flash message
     */
    public static function info($message)
    {
        session()->flash('flash_info', $message);
    }
}

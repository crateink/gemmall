<?php

if (!function_exists('get_current_language')) {
    /**
     * 获取当前语言
     *
     * @return string
     */
    function get_current_language()
    {
        return \Config\Services::language()->getLocale();
    }
}

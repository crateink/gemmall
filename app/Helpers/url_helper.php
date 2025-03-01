<?php

if (!function_exists('url_with_lang')) {
    /**
     * 生成带语言参数的 URL
     *
     * @param string $uri 目标 URI
     * @param string $lang 语言代码
     * @return string
     */
    function url_with_lang($uri, $lang = null)
    {
        $lang = $lang ?? \Config\Services::language()->getLocale(); // 获取当前语言
        return site_url($uri) . '?lang=' . $lang;
    }
}

if (!function_exists('url_to_with_lang')) {
    function url_to_with_lang($controller, ...$args)
    {
        $lang = \Config\Services::language()->getLocale(); // 获取当前语言
        $url = url_to($controller, ...$args); // 生成基础 URL
        return $url . '?lang=' . $lang; // 添加语言参数
    }
}

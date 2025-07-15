<?php

declare(strict_types=1);

namespace src;

/**
 * Класс для работы с API
 *
 * @author      Sergey Ivanov
 * @version		v.1.0 (15/07/2025)
 */
class Api
{
    public function __construct()
    {
    }

    public function run(): void
    {
        dump(__METHOD__);

        dump('Hello, World! | PHP Version: ' . PHP_VERSION);
    }

    /**
     * Заполняет строковый шаблон `template` данными из объекта `object`
     *
     * @author		Sergey Ivanov
     * @version		v.1.0 (15/07/2025)
     * @param		array $array
     * @param		string $template
     * @return		string
     */
    public function get_api_path(array $array, string $template) : string
    {
        return preg_replace_callback('/%(\w+)%/', function ($matches) use ($array) {
            $key = $matches[1];

            if (!array_key_exists($key, $array)) {
                return $matches[0];
            }

            $value = $array[$key];
            return is_string($value) ? rawurlencode($value) : $value;
        }, $template);
    }
}

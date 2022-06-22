<?php
namespace App\Loader;

use stdClass;

class YamlLoader implements LoaderInterface
{
    public static function load(string $path): object
    {
        $raw = file_get_contents($path);
        return yaml_parse_file($raw);
    }

    public static function getExtension(): string
    {
        return 'json';
    }
}
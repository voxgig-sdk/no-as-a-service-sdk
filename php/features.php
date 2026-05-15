<?php
declare(strict_types=1);

// NoAsAService SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class NoAsAServiceFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new NoAsAServiceBaseFeature();
            case "test":
                return new NoAsAServiceTestFeature();
            default:
                return new NoAsAServiceBaseFeature();
        }
    }
}

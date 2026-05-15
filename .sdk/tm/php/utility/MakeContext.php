<?php
declare(strict_types=1);

// NoAsAService SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class NoAsAServiceMakeContext
{
    public static function call(array $ctxmap, ?NoAsAServiceContext $basectx): NoAsAServiceContext
    {
        return new NoAsAServiceContext($ctxmap, $basectx);
    }
}

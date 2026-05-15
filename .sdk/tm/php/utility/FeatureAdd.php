<?php
declare(strict_types=1);

// NoAsAService SDK utility: feature_add

class NoAsAServiceFeatureAdd
{
    public static function call(NoAsAServiceContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}

<?php
declare(strict_types=1);

// NoAsAService SDK utility: prepare_body

class NoAsAServicePrepareBody
{
    public static function call(NoAsAServiceContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}

<?php
declare(strict_types=1);

// NoAsAService SDK utility: result_body

class NoAsAServiceResultBody
{
    public static function call(NoAsAServiceContext $ctx): ?NoAsAServiceResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}

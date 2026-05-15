<?php
declare(strict_types=1);

// NoAsAService SDK utility: result_headers

class NoAsAServiceResultHeaders
{
    public static function call(NoAsAServiceContext $ctx): ?NoAsAServiceResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}

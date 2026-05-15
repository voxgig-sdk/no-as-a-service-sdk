<?php
declare(strict_types=1);

// NoAsAService SDK exists test

require_once __DIR__ . '/../noasaservice_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = NoAsAServiceSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}

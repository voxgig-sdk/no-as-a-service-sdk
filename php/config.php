<?php
declare(strict_types=1);

// NoAsAService SDK configuration

class NoAsAServiceConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "NoAsAService",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://naas.isalman.dev",
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "non" => [],
                ],
            ],
            "entity" => [
        'non' => [
          'fields' => [],
          'name' => 'non',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'active' => true,
                  'args' => [],
                  'kind' => 'http',
                  'method' => 'GET',
                  'orig' => '/no',
                  'parts' => [
                    'no',
                  ],
                  'select' => [],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                  'index$' => 0,
                ],
              ],
              'key$' => 'load',
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return NoAsAServiceFeatures::make_feature($name);
    }
}

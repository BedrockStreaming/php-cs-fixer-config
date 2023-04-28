<?php

declare(strict_types=1);

use M6Web\CS\Config\BedrockStreaming;
use PHPUnit\Framework\TestCase;

class BedrockStreamingTest extends TestCase
{
    /**
     * @test
     * @covers M6Web\CS\Config\BedrockStreaming::getRules
     */
    public function RulesOrderShoulNotBeAltered()
    {
        $extraRules = [
            'braces' => [
                'allow_single_line_closure' => false,
            ],
            'dummy_rule' => 'dummy_value',
            '@Symfony' => false,
        ];
        $rules = (new BedrockStreaming($extraRules))->getRules();

        self::assertEquals('array', gettype($rules));

        // Make sure the new rule is added before the standard ones to prevent any regression
        $firstValue = reset($rules);
        $firstKey = key($rules);
        self::assertEquals('dummy_rule', $firstKey, 'The new rules should be added before standard ones');
        self::assertEquals('dummy_value', $firstValue);

        // Make sure the first standard rule comes after the custom rules
        self::assertArrayHasKey('@Symfony', $rules, 'The @Symfony rule should not be deleted');
        $nextValue = next($rules);
        $nextKey = key($rules);
        self::assertEquals('@Symfony', $nextKey, 'The first rule should always remain @Symfony');
        self::assertTrue($nextValue, 'The standard root rules value should never change');

        // Make sure a nested rule cannot be overriden
        self::assertArrayHasKey('braces', $rules);
        self::assertArrayHasKey('allow_single_line_closure', $rules['braces']);
        self::assertTrue($rules['braces']['allow_single_line_closure'], 'The standard nested rules should never change');
    }
}

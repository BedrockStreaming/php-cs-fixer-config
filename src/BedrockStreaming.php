<?php

namespace M6Web\CS\Config;

use PhpCsFixer\Config;

final class BedrockStreaming extends Config
{
    public function __construct()
    {
        parent::__construct('Bedrock Streaming');

        $this->setRiskyAllowed(true);
    }

    public function getRules(): array
    {
        $rules = [
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'braces' => [
                'allow_single_line_closure' => true,
            ],
            'heredoc_to_nowdoc' => false,
            'increment_style' => ['style' => 'post'],
            'no_unreachable_default_argument_value' => false,
            'ordered_imports' => ['sort_algorithm' => 'alpha'],
            'phpdoc_line_span' => [
                'property' => 'single',
                'const' => 'single',
            ],
            'phpdoc_summary' => false,
            'yoda_style' => false,
        ];

        return $rules;
    }
}

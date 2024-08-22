<?php

declare(strict_types=1);

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
            '@PSR12' => true,
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'declare_strict_types' => true,
            'global_namespace_import' => [
                'import_classes' => false,
                'import_constants' => false,
                'import_functions' => false,
            ],
            'heredoc_to_nowdoc' => false,
            'increment_style' => ['style' => 'post'],
            'native_function_invocation' => ['strict' => false],
            'no_superfluous_phpdoc_tags' => ['allow_mixed' => true],
            'no_unreachable_default_argument_value' => false,
            'ordered_imports' => ['sort_algorithm' => 'alpha'],
            'phpdoc_line_span' => [
                'property' => 'single',
                'const' => 'single',
            ],
            'phpdoc_summary' => false,
            'single_line_throw' => false,
            'yoda_style' => false,
            'trailing_comma_in_multiline' => ['elements' => ['arguments', 'arrays', 'match', 'parameters']],
        ];

        return $rules;
    }
}

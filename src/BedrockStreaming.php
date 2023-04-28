<?php

declare(strict_types=1);

namespace M6Web\CS\Config;

use PhpCsFixer\Config;

final class BedrockStreaming extends Config
{
    /** @var array */
    private $extraRules;

    public function __construct(array $extraRules = [])
    {
        parent::__construct('Bedrock Streaming');

        $this->extraRules = $extraRules;
        $this->setRiskyAllowed(true);
    }

    public function getRules(): array
    {
        $standardRules = [
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'braces' => [
                'allow_single_line_closure' => true,
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
        ];

        $newRules = \array_diff_key($this->extraRules, $standardRules);

        return \array_merge($newRules, $standardRules);
    }
}

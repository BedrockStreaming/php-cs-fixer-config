<?php

namespace M6Web\CS\Config;

use PhpCsFixer\Config;

/**
 * @deprecated Use M6Web\CS\Config\BedrockStreaming
 */
final class Php73 extends Config
{
    public function __construct()
    {
        parent::__construct('M6Web (PHP 7.3)');

        $this->setRiskyAllowed(true);
    }

    public function getRules()
    {
        $rules = [
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'no_unreachable_default_argument_value' => false,
            'braces' => [
                'allow_single_line_closure' => true,
            ],
            'heredoc_to_nowdoc' => false,
            'phpdoc_summary' => false,
            'increment_style' => ['style' => 'post'],
            'yoda_style' => false,
            'ordered_imports' => ['sort_algorithm' => 'alpha'],
            'phpdoc_line_span' => [
                'property' => 'single',
                'const' => 'single',
            ],
        ];

        return $rules;
    }
}

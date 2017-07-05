<?php

namespace M6Web\CS\Config;

use PhpCsFixer\Config;

final class Php70 extends Config
{
    public function __construct()
    {
        parent::__construct('M6Web (PHP 7.0)');

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
        ];

        return $rules;
    }
}

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
        return [
            '@PSR12' => true,
            '@Symfony' => true,
            'array_syntax' => true,
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
            'trailing_comma_in_multiline' => ['elements' => ['arguments', 'arrays', 'match', 'parameters', 'array_destructuring']],
            'simple_to_complex_string_variable' => true,
            'no_unset_cast' => true,
            'clean_namespace' => true,
            'short_scalar_cast' => true,
            'normalize_index_brace' => true,
            'assign_null_coalescing_to_coalesce_equal' => true,
            'no_whitespace_before_comma_in_array' => ['after_heredoc' => true],
            'method_argument_space' => ['after_heredoc' => true, 'on_multiline' => 'ensure_fully_multiline', 'attribute_placement' => 'ignore'],
            'heredoc_indentation' => true,
            'modifier_keywords' => ['elements' => ['const, 'method', 'property']],
            'list_syntax' => true,
            'ternary_to_null_coalescing' => true,
        ];
    }
}

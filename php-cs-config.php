<?php

$rules = [
    '@PSR2' => true,
    '@PhpCsFixer' => true,
    '@Symfony' => true,
    '@DoctrineAnnotation' => true,
    '@PHP71Migration' => true,
    'linebreak_after_opening_tag' => true,
    'phpdoc_to_comment' => false,
    'single_line_comment_style' => false,
    'phpdoc_var_without_name' => false,
    'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
    'array_syntax' => ['syntax' => 'short'],
    'phpdoc_align' => ['align' => 'left'],
    'list_syntax' => ['syntax' => 'short'],
    'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
    'concat_space' => ['spacing' => 'one'],
    'doctrine_annotation_array_assignment' => ['operator' => '=', 'ignored_tags' => ['Route', 'ParamConverter']],
];

return PhpCsFixer\Config::create()
    ->setRules($rules)
;

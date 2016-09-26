<?php

// Zmiany na branczu EXP-1
// i następne zmiany na tym branczu
// i więcej i więcej i więcej...
// trochę jeszcze przed mergem do DEVa

$header = <<<EOF
This file is part of the Monolog package.

(c) Jordi Boggiano <j.boggiano@seld.be>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = Symfony\CS\Finder::create()
        ->files()
        ->name('*.php')
        ->exclude('Fixtures')
        ->in(__DIR__ . '/src')
        ->in(__DIR__ . '/tests')
;

return Symfony\CS\Config::create()
                ->setUsingCache(true)
                //->setUsingLinter(false)
                ->setRiskyAllowed(true)
                ->setRules(array(
                    '@PSR2' => true,
                    'binary_operator_spaces' => true,
                    'blank_line_before_return' => true,
                    'header_comment' => array('header' => $header),
                    'include' => true,
                    'long_array_syntax' => true,
                    'method_separation' => true,
                    'no_blank_lines_after_class_opening' => true,
                    'no_blank_lines_after_phpdoc' => true,
                    'no_blank_lines_between_uses' => true,
                    'no_unused_imports' => true,
                    'object_operator_without_whitespace' => true,
                    'phpdoc_align' => true,
                    'phpdoc_indent' => true,
                    'phpdoc_no_access' => true,
                    'phpdoc_no_package' => true,
                    'phpdoc_order' => true,
                    'phpdoc_scalar' => true,
                    'phpdoc_trim' => true,
                    'phpdoc_type_to_var' => true,
                    'psr0' => true,
                    'single_blank_line_before_namespace' => true,
                    'spaces_cast' => true,
                    'standardize_not_equals' => true,
                    'ternary_operator_spaces' => true,
                    'trailing_comma_in_multiline_array' => true,
                    'whitespacy_lines' => true,
                    'phpdoc_align' => true,
                    'phpdoc_indent' => true,
                    'phpdoc_no_access' => true,
                    'phpdoc_no_package' => true,
                    'phpdoc_order' => true,
                    'phpdoc_scalar' => true,
                    'phpdoc_trim' => true,
                    'phpdoc_type_to_var' => true,
                    'phpdoc_align' => true,
                    'phpdoc_indent' => true,
                    'phpdoc_no_access' => true,
                    'phpdoc_no_package' => true,
                    'phpdoc_order' => true,
                    'phpdoc_scalar' => true,
                    'phpdoc_trim' => true,
                    'phpdoc_type_to_var' => true,
                    'phpdoc_trim' => true,
                    'phpdoc_type_to_var' => true,
                    'psr0' => true,
                    'single_blank_line_before_namespace' => true,
                    'spaces_cast' => true,
                    'standardize_not_equals' => true,
                    'ternary_operator_spaces' => true,                    
                ))
                ->finder($finder)
;

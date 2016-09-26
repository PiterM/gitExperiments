<?php

// Zmiany na branczu EXP-1
// i następne zmiany na tym branczu
// i więcej i więcej i więcej...
// trochę jeszcze przed mergem do DEVa
// jedziemy dalej..

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
        'phpdoc_align' => true,
        'phpdoc_indent' => true,
        'psr0' => true,
        'single_blank_line_before_namespace' => true,        
                ))
                ->finder($finder)
;

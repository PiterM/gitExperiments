<?php

// Zmiany na branczu EXP-2
// i jeszcze ich więcej
// i więcej i więcej i więcej...
// jedziemy do przodu z EXP-2!!
// zmiany zmiany zmiany
// i jeszcze trochę po revertach
// odjeżdżamy z EXP-2 do przodu
// i jeszcze dalej....

$header = <<<EOF
This file is part of the Monolog package.

(c) Jordi Boggiano <j.boggiano@seld.be>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$founder = Symfony\CS\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Fixtures')
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
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
        'phpdoc_type_to_var' => true,
        'psr0' => true,
        'single_blank_line_before_namespace' => true,
        'spaces_cast' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline_array' => true,
        'whitespacy_lines' => true,
        'binary_operator_spaces' => true,
        'blank_line_before_return' => true,
    ))
    ->finder($finder)
;

/*
 * Takie zmiany na EXP-2 bym zaproponował
 */
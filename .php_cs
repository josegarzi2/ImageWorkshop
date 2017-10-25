<?php

$header = <<<'EOF'
This file is part of the ImageWorkshop package.

(c) http://phpimageworkshop.com

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'function_declaration' => ['closure_function_spacing' => 'none'],
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
;

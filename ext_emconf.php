<?php

/**
 * Extension Manager/Repository config file for ext "demo_test".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Demo-test',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'AsGroup\\DemoTest\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'AlexSon',
    'author_email' => 'djalexson@gmail.com',
    'author_company' => 'as Group',
    'version' => '1.0.0',
];

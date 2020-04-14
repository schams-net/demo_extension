<?php
$EM_CONF['demo_extension'] = [
    'title' => 'Demo Extension',
    'description' => 'Demo extension to show TYPO3 extension development',
    'category' => 'plugin',
    'author' => 'Michael Schams',
    'author_email' => 'michael@example.com',
    'state' => 'alpha',
    'uploadfolder' => 1,
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.999',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

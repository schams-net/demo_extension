<?php

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Cerebrum.DemoExtension',
            'Frontend',
            // list of controller-action combinations that can be accessed
            [
                'Item' => 'list, detail'
            ],
            // during development: not-cachable controller-action combinations
            [
                'Item' => 'list, detail'
            ]
        );
    }
);

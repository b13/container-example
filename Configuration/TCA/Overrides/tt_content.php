<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->addContainer(
    'b13-2cols-with-header-container',
    '2 Column Container With Header',
    'Some Description of the Container',
    [
        [
            ['name' => 'header', 'colPos' => 200, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia']]
        ],
        [
            ['name' => 'left side', 'colPos' => 201],
            ['name' => 'right side', 'colPos' => 202]
        ]
    ],
    'EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg',
    'EXT:container/Resources/Private/Templates/Container.html',
    'EXT:container/Resources/Private/Templates/Grid.html',
    false, // do not add saveAndClose to new Content Element Wizard
    true
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['b13-2cols-with-header-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';

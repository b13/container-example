<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols-with-header-container', // CType
            '2 Column Container With Header', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'header', 'colPos' => 200, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia']]
                ],
                [
                    ['name' => 'left side', 'colPos' => 201],
                    ['name' => 'right side', 'colPos' => 202]
                ]
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// override default settings
$GLOBALS['TCA']['tt_content']['types']['b13-2cols-with-header-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';

// second container
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols', // CType
            '2 Column', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => '2-cols-left', 'colPos' => 200],
                    ['name' => '2-cols-right', 'colPos' => 201]
                ]
            ] // grid configuration
        )
    )
        ->addGridLayoutPath('EXT:backendpreviews/Resources/Private/Layouts/')
        ->addGridPartialPath('EXT:backendpreviews/Resources/Private/Partials/')
        ->setGridTemplate('EXT:container_example/Resources/Private/Templates/Grid.html')
);

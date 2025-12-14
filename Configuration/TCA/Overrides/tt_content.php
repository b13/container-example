<?php

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols-with-header-container', // CType
            '2 Column Container With Header', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'header', 'colPos' => 200, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia, b13-2cols']]
                ],
                [
                    ['name' => 'left side', 'colPos' => 201],
                    ['name' => 'right side', 'colPos' => 202, 'maxitems' => 1]
                ]
            ] // grid configuration
        )
    )
    // override default configurations
    ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
    ->setDefaultValues(['header' => 'my-default-value-header'])
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
                    ['name' => '2-cols-left', 'colPos' => 200, 'maxitems' => 1],
                    ['name' => '2-cols-right', 'colPos' => 201, 'allowed' => ['CType' => 'header']]
                ]
            ] // grid configuration
        )
    )->setBackendTemplate('EXT:container_example/Resources/Private/Templates/BackendTemplate.html')
);
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-1col', // CType
            '1 Column', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'content', 'colPos' => 200],
                ]
            ] // grid configuration
        )
    )->setRegisterInNewContentElementWizard(false)
);

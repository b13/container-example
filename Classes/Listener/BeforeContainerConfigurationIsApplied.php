<?php

declare(strict_types=1);

namespace B13\ContainerExample\Listener;

/*
 * This file is part of TYPO3 CMS-based extension "container-example" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use B13\Container\Events\BeforeContainerConfigurationIsAppliedEvent;

class BeforeContainerConfigurationIsApplied
{
    public function __invoke(BeforeContainerConfigurationIsAppliedEvent $e)
    {
        $configuration = $e->getContainerConfiguration();
        if ($configuration->getCType() === 'b13-2cols') {
            $configuration->setDescription('mod -- ' . $configuration->getDescription());
            $configuration->changeGridColumnConfiguration(201, ['disallowed' => ['CType' => 'uploads, image']]);
        }
    }
}

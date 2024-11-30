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

use B13\Container\Events\BeforeContainerPreviewIsRenderedEvent;

class BeforeContainerPreviewIsRendered
{
    public function __invoke(BeforeContainerPreviewIsRenderedEvent $e)
    {
        $e->getView()->assign('foo', 'bar');
    }
}

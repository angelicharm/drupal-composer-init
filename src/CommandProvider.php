<?php

namespace Hussainweb\DrupalComposerInit;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability
{

    /**
     * {@inheritdoc}
     */
    public function getCommands()
    {
        return [new DrupalInitCommand()];
    }
}

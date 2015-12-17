<?php

namespace Claroline\AngularUiBootstrapBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;
use Claroline\AngularUiBootstrapBundle\Installation\AdditionalInstaller;

/**
 * Bundle class.
 * Uncomment if necessary.
 */
class ClarolineAngularUiBootstrapBundle extends PluginBundle
{
    public function hasMigrations()
    {
        return false;
    }
}

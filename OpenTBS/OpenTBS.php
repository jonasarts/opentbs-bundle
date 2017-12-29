<?php

/*
 * This file is part of the OpenTBS bundle package.
 *
 * (c) Jonas Hauser <symfony@jonasarts.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace jonasarts\Bundle\OpenTBSBundle\OpenTBS;

require_once __DIR__ . '/../lib/tbs_class.php';
require_once __DIR__ . '/../lib/tbs_plugin_opentbs.php';

/**
 * OpenTBS Service
 */
class OpenTBS extends \clsTinyButStrong
{
    public function __construct()
    {
        // construct the TBS class
        parent::__construct();

        // load the OpenTBS plugin
        $this->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);
    }
}

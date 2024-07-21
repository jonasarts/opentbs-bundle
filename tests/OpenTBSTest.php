<?php

/*
 * This file is part of the OpenTBS bundle package.
 *
 * (c) Jonas Hauser <symfony@jonasarts.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace jonasarts\Bundle\OpenTBSBundle\Tests;

use jonasarts\Bundle\OpenTBSBundle\OpenTBS\OpenTBS;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 *
 */
class OpenTBSTest extends WebTestCase
{
    public function testClass()
    {
        $tbs = new \jonasarts\Bundle\OpenTBSBundle\OpenTBS\OpenTBS();

        $this->assertInstanceOf(\jonasarts\Bundle\OpenTBSBundle\OpenTBS\OpenTBS::class, $tbs);
        $this->assertInstanceOf(OpenTBS::class, $tbs);
    }

    public function testCall()
    {
        $tbs = new \jonasarts\Bundle\OpenTBSBundle\OpenTBS\OpenTBS();

        $tbs->NoErr = true;
        $r = $tbs->LoadTemplate('unknown.doc');

        //$handle = tmpfile();
        //fwrite($handle, $binary_contents);
        //$r = $tbs->LoadTemplate($handle);

        $this->assertFalse($r);
    }
}
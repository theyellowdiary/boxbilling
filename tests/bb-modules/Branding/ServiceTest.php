<?php


namespace Box\Tests\Mod\Branding;


class ServiceTest extends \BBTestCase
{

    public function testDi()
    {
        $service = new \Box\Mod\Branding\Service();

        $di = new \Box_Di();
        $db = $this->getMockBuilder('Box_Database')->getMock();

        $di['db'] = $db;
        $service->setDi($di);
        $result = $service->getDi();
        $this->assertEquals($di, $result);
    }

    public function testuninstall()
    {
        $di = new \Box_Di();

        $brandingService = new \Box\Mod\Branding\Service();
        $brandingService->setDi($di);

        $result = $brandingService->uninstall();
        $this->assertTrue($result);
    }

}
 
<?php
/**
 * @group Core
 */
class Box_Mod_Branding_ServiceTest extends ApiTestCase
{
    private $configLicense = null;

    public function tearDown()
    {
        if ($this->configLicense){
            $this->di['config']['license'] = $this->configLicense;
        }
    }

    public function testEvents()
    {
        $service = $this->di['mod_service']('branding');
        $bool = $service->uninstall();
        $this->assertTrue($bool);
    }
}
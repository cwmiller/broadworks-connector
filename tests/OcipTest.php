<?php

namespace CWM\BroadWorksConnector\Tests;

use CWM\BroadWorksConnector\Ocip\TcpTransport;
use CWM\BroadWorksConnector\OcipClient;

class OcipTest extends \PHPUnit\Framework\TestCase
{
    public function testHttpTransport()
    {
        $ocip = new OcipClient('http://test.com', 'username', 'password');
        $this->assertInstanceOf('\\CWM\\BroadWorksConnector\\Ocip\SoapTransport', $ocip->getTransport());
    }

    public function testHttpsTransport()
    {
        $ocip = new OcipClient('https://test.com', 'username', 'password');
        $this->assertInstanceOf('\\CWM\\BroadWorksConnector\\Ocip\SoapTransport', $ocip->getTransport());
    }

    public function testTcpTransport()
    {
        $ocip = new OcipClient('tcp://test.com:8080', 'username', 'password');
        $this->assertInstanceOf('\\CWM\\BroadWorksConnector\\Ocip\TcpTransport', $ocip->getTransport());

        /** @var TcpTransport $transport */
        $transport = $ocip->getTransport();

        $this->assertEquals('test.com', $transport->getHost());
        $this->assertEquals(8080, $transport->getPort());
    }

    public function testUnhandledScheme()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('InvalidArgumentException');
        } else {
            $this->setExpectedException('InvalidArgumentException');
        }

        new OcipClient('ftp://test.com', 'username', 'password');
    }

    public function testUnspecifiedScheme()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('InvalidArgumentException');
        } else {
            $this->setExpectedException('InvalidArgumentException');
        }

        new OcipClient('test.com', 'username', 'password');
    }
}
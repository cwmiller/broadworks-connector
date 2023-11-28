<?php

namespace CWM\BroadWorksConnector\Tests;

use CWM\BroadWorksConnector\Ocip\Models\C\OCIMessage;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginType;
use CWM\BroadWorksConnector\XmlUtils;
use DOMDocument;

class XmlUtilsTest extends \PHPUnit\Framework\TestCase
{
    public function testFromXml()
    {
        $xml = XmlTestData::LoginResponse14sp4Xml();

        /** @var OCIMessage $broadsoftDocument */
        $broadsoftDocument = XmlUtils::fromXml($xml->firstChild,
            '\\CWM\\BroadWorksConnector\\Ocip\\Models\\C\\OCIMessage', '\\CWM\\BroadWorksConnector\\Ocip\\Models\\');

        $this->assertEquals('acbdf1234567890', $broadsoftDocument->getSessionId());
        $this->assertNull($broadsoftDocument->getUserId());
        $this->assertNull($broadsoftDocument->getPhoneNumber());
        $this->assertCount(1, $broadsoftDocument->getCommand());

        /** @var LoginResponse14sp4 $command */
        $command = $broadsoftDocument->getCommand()[0];

        $this->assertInstanceOf('\\CWM\\BroadWorksConnector\\Ocip\Models\\C\\OCIDataResponse', $command);
        $this->assertInstanceOf('\\CWM\\BroadWorksConnector\\Ocip\Models\\LoginType', $command->getLoginType());
        $this->assertEquals(LoginType::SERVICE_PROVIDER, $command->getLoginType()->getValue());
        $this->assertEquals('en_US', $command->getLocale());
        $this->assertEquals('ISO-8859-1', $command->getEncoding());
        $this->assertNull($command->getGroupId());
        $this->assertEquals('SP123', $command->getServiceProviderId());
        $this->assertFalse($command->getIsEnterprise());

        if (method_exists($this, 'assertInternalType')) {
            $this->assertInternalType('int', $command->getPasswordExpiresDays());
        } else if (method_exists($this, 'assertIsInt')) {
            $this->assertIsInt($command->getPasswordExpiresDays());
        }

        $this->assertEquals(2147483647, $command->getPasswordExpiresDays());
        $this->assertEquals('test.com', $command->getUserDomain());
    }

    public function testToXml()
    {
        $document = new DOMDocument();

        $broadsoftDocument = $document->createElement('BroadsoftDocument');
        $broadsoftDocument->setAttribute('protocol', 'OCI');
        $broadsoftDocument->setAttribute('xmlns', 'C');
        $broadsoftDocument->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $sessionIdElement = $document->createElement('sessionId', 'acbdf1234567890');
        $sessionIdElement->setAttribute('xmlns', '');
        $broadsoftDocument->appendChild($sessionIdElement);
        
        $commandElement = $document->createElement('command');
        $commandElement->setAttribute('xmlns', '');
        $broadsoftDocument->appendChild($commandElement);
        $document->appendChild($broadsoftDocument);

        XmlUtils::toXml(XmlTestData::groupOutgoingCallingPlanRedirectingModifyListRequest(), $commandElement, $document);

        $this->assertStringEqualsFile(__DIR__ . '/GroupOutgoingCallingPlanRedirectingModifyListRequest.xml', $document->saveXML());
    }

    public function testUnassignDepartment()
    {
        $document = new DOMDocument();

        $broadsoftDocument = $document->createElement('BroadsoftDocument');
        $broadsoftDocument->setAttribute('protocol', 'OCI');
        $broadsoftDocument->setAttribute('xmlns', 'C');
        $broadsoftDocument->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $sessionIdElement = $document->createElement('sessionId', 'acbdf1234567890');
        $sessionIdElement->setAttribute('xmlns', '');
        $broadsoftDocument->appendChild($sessionIdElement);

        $commandElement = $document->createElement('command');
        $commandElement->setAttribute('xmlns', '');
        $broadsoftDocument->appendChild($commandElement);
        $document->appendChild($broadsoftDocument);

        XmlUtils::toXml(XmlTestData::unassignDepartmentData(), $commandElement, $document);

        $this->assertStringEqualsFile(__DIR__ . '/UnassignDepartment.xml', $document->saveXML());
    }
}
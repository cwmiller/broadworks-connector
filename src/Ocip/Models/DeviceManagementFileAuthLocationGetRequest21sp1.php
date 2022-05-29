<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileAuthLocationGetRequest21sp1
 *
 * Get the address and credentials of the File Repository hosting the requested access device file. 
 *         Also get the file name and path on the File Repository. 
 *         The response is either DeviceManagementFileAuthLocationGetResponse21sp1 or ErrorResponse.
 *         The following elements are only used in AS data mode and will fail in XS data mode:
 *           deviceToken
 *         Replaced by DeviceManagementFileAuthLocationGetRequest22
 *
 * @see DeviceManagementFileAuthLocationGetResponse21sp1
 * @see ErrorResponse
 * @see DeviceManagementFileAuthLocationGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:1552","type":"sequence"}]
 */
class DeviceManagementFileAuthLocationGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceAccessProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16|null
     */
    protected $deviceAccessProtocol = null;

    /**
     * @ElementName deviceAccessMethod
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceAccessMethod = null;

    /**
     * @ElementName deviceAccessURI
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $deviceAccessURI = null;

    /**
     * @ElementName accessDeviceUserName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $accessDeviceUserName = null;

    /**
     * @ElementName accessDeviceUserPassword
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $accessDeviceUserPassword = null;

    /**
     * @ElementName deviceToken
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @var string|null
     */
    protected $deviceToken = null;

    /**
     * @ElementName signedPassword
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @var string|null
     */
    protected $signedPassword = null;

    /**
     * @ElementName macAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @MaxLength 12
     * @var string|null
     */
    protected $macAddress = null;

    /**
     * @ElementName realmName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 1
     * @MaxLength 265
     * @var string|null
     */
    protected $realmName = null;

    /**
     * @ElementName digestHa1Complement
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 32
     * @MaxLength 256
     * @var string|null
     */
    protected $digestHa1Complement = null;

    /**
     * @ElementName digestResponse
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1552
     * @MinLength 32
     * @MaxLength 32
     * @var string|null
     */
    protected $digestResponse = null;

    /**
     * Getter for deviceAccessProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16
     */
    public function getDeviceAccessProtocol()
    {
        return $this->deviceAccessProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessProtocol;
    }

    /**
     * Setter for deviceAccessProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16 $deviceAccessProtocol
     * @return $this
     */
    public function setDeviceAccessProtocol(\CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16 $deviceAccessProtocol)
    {
        $this->deviceAccessProtocol = $deviceAccessProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessProtocol()
    {
        $this->deviceAccessProtocol = null;
        return $this;
    }

    /**
     * Getter for deviceAccessMethod
     *
     * @return string
     */
    public function getDeviceAccessMethod()
    {
        return $this->deviceAccessMethod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessMethod;
    }

    /**
     * Setter for deviceAccessMethod
     *
     * @param string $deviceAccessMethod
     * @return $this
     */
    public function setDeviceAccessMethod($deviceAccessMethod)
    {
        $this->deviceAccessMethod = $deviceAccessMethod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessMethod()
    {
        $this->deviceAccessMethod = null;
        return $this;
    }

    /**
     * Getter for deviceAccessURI
     *
     * @return string
     */
    public function getDeviceAccessURI()
    {
        return $this->deviceAccessURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessURI;
    }

    /**
     * Setter for deviceAccessURI
     *
     * @param string $deviceAccessURI
     * @return $this
     */
    public function setDeviceAccessURI($deviceAccessURI)
    {
        $this->deviceAccessURI = $deviceAccessURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessURI()
    {
        $this->deviceAccessURI = null;
        return $this;
    }

    /**
     * Getter for accessDeviceUserName
     *
     * @return string
     */
    public function getAccessDeviceUserName()
    {
        return $this->accessDeviceUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceUserName;
    }

    /**
     * Setter for accessDeviceUserName
     *
     * @param string $accessDeviceUserName
     * @return $this
     */
    public function setAccessDeviceUserName($accessDeviceUserName)
    {
        $this->accessDeviceUserName = $accessDeviceUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceUserName()
    {
        $this->accessDeviceUserName = null;
        return $this;
    }

    /**
     * Getter for accessDeviceUserPassword
     *
     * @return string
     */
    public function getAccessDeviceUserPassword()
    {
        return $this->accessDeviceUserPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceUserPassword;
    }

    /**
     * Setter for accessDeviceUserPassword
     *
     * @param string $accessDeviceUserPassword
     * @return $this
     */
    public function setAccessDeviceUserPassword($accessDeviceUserPassword)
    {
        $this->accessDeviceUserPassword = $accessDeviceUserPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceUserPassword()
    {
        $this->accessDeviceUserPassword = null;
        return $this;
    }

    /**
     * Getter for deviceToken
     *
     * @return string
     */
    public function getDeviceToken()
    {
        return $this->deviceToken instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceToken;
    }

    /**
     * Setter for deviceToken
     *
     * @param string $deviceToken
     * @return $this
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceToken()
    {
        $this->deviceToken = null;
        return $this;
    }

    /**
     * Getter for signedPassword
     *
     * @return string
     */
    public function getSignedPassword()
    {
        return $this->signedPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signedPassword;
    }

    /**
     * Setter for signedPassword
     *
     * @param string $signedPassword
     * @return $this
     */
    public function setSignedPassword($signedPassword)
    {
        $this->signedPassword = $signedPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSignedPassword()
    {
        $this->signedPassword = null;
        return $this;
    }

    /**
     * Getter for macAddress
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macAddress;
    }

    /**
     * Setter for macAddress
     *
     * @param string $macAddress
     * @return $this
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacAddress()
    {
        $this->macAddress = null;
        return $this;
    }

    /**
     * Getter for realmName
     *
     * @return string
     */
    public function getRealmName()
    {
        return $this->realmName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->realmName;
    }

    /**
     * Setter for realmName
     *
     * @param string $realmName
     * @return $this
     */
    public function setRealmName($realmName)
    {
        $this->realmName = $realmName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRealmName()
    {
        $this->realmName = null;
        return $this;
    }

    /**
     * Getter for digestHa1Complement
     *
     * @return string
     */
    public function getDigestHa1Complement()
    {
        return $this->digestHa1Complement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digestHa1Complement;
    }

    /**
     * Setter for digestHa1Complement
     *
     * @param string $digestHa1Complement
     * @return $this
     */
    public function setDigestHa1Complement($digestHa1Complement)
    {
        $this->digestHa1Complement = $digestHa1Complement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigestHa1Complement()
    {
        $this->digestHa1Complement = null;
        return $this;
    }

    /**
     * Getter for digestResponse
     *
     * @return string
     */
    public function getDigestResponse()
    {
        return $this->digestResponse instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digestResponse;
    }

    /**
     * Setter for digestResponse
     *
     * @param string $digestResponse
     * @return $this
     */
    public function setDigestResponse($digestResponse)
    {
        $this->digestResponse = $digestResponse;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigestResponse()
    {
        $this->digestResponse = null;
        return $this;
    }


}


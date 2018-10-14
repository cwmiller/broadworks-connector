<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileAuthLocationGetRequest21sp1
 *
 * Get the address and credentials of the File Repository hosting the requested
 * access device file. 
 *         Also get the file name and path on the File Repository. 
 *         The response is either DeviceManagementFileAuthLocationGetResponse21sp1
 * or ErrorResponse.
 *         The following elements are only used in AS data mode and will fail in XS
 * data mode:
 *           deviceToken
 *
 * @see DeviceManagementFileAuthLocationGetResponse21sp1
 * @see ErrorResponse
 */
class DeviceManagementFileAuthLocationGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceAccessProtocol
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16|null
     */
    private $deviceAccessProtocol = null;

    /**
     * @ElementName deviceAccessMethod
     * @var string|null
     */
    private $deviceAccessMethod = null;

    /**
     * @ElementName deviceAccessURI
     * @var string|null
     */
    private $deviceAccessURI = null;

    /**
     * @ElementName accessDeviceUserName
     * @var string|null
     */
    private $accessDeviceUserName = null;

    /**
     * @ElementName accessDeviceUserPassword
     * @var string|null
     */
    private $accessDeviceUserPassword = null;

    /**
     * @ElementName deviceToken
     * @var string|null
     */
    private $deviceToken = null;

    /**
     * @ElementName signedPassword
     * @var string|null
     */
    private $signedPassword = null;

    /**
     * @ElementName macAddress
     * @var string|null
     */
    private $macAddress = null;

    /**
     * @ElementName realmName
     * @var string|null
     */
    private $realmName = null;

    /**
     * @ElementName digestHa1Complement
     * @var string|null
     */
    private $digestHa1Complement = null;

    /**
     * @ElementName digestResponse
     * @var string|null
     */
    private $digestResponse = null;

    /**
     * Getter for deviceAccessProtocol
     *
     * @ElementName deviceAccessProtocol
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16|null
     */
    public function getDeviceAccessProtocol()
    {
        return $this->deviceAccessProtocol;
    }

    /**
     * Setter for deviceAccessProtocol
     *
     * @ElementName deviceAccessProtocol
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16|null $deviceAccessProtocol
     * @return $this
     */
    public function setDeviceAccessProtocol(\CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16 $deviceAccessProtocol)
    {
        $this->deviceAccessProtocol = $deviceAccessProtocol;
        return $this;
    }

    /**
     * Getter for deviceAccessMethod
     *
     * @ElementName deviceAccessMethod
     * @return string|null
     */
    public function getDeviceAccessMethod()
    {
        return $this->deviceAccessMethod;
    }

    /**
     * Setter for deviceAccessMethod
     *
     * @ElementName deviceAccessMethod
     * @param string|null $deviceAccessMethod
     * @return $this
     */
    public function setDeviceAccessMethod($deviceAccessMethod)
    {
        $this->deviceAccessMethod = $deviceAccessMethod;
        return $this;
    }

    /**
     * Getter for deviceAccessURI
     *
     * @ElementName deviceAccessURI
     * @return string|null
     */
    public function getDeviceAccessURI()
    {
        return $this->deviceAccessURI;
    }

    /**
     * Setter for deviceAccessURI
     *
     * @ElementName deviceAccessURI
     * @param string|null $deviceAccessURI
     * @return $this
     */
    public function setDeviceAccessURI($deviceAccessURI)
    {
        $this->deviceAccessURI = $deviceAccessURI;
        return $this;
    }

    /**
     * Getter for accessDeviceUserName
     *
     * @ElementName accessDeviceUserName
     * @return string|null
     */
    public function getAccessDeviceUserName()
    {
        return $this->accessDeviceUserName;
    }

    /**
     * Setter for accessDeviceUserName
     *
     * @ElementName accessDeviceUserName
     * @param string|null $accessDeviceUserName
     * @return $this
     */
    public function setAccessDeviceUserName($accessDeviceUserName)
    {
        $this->accessDeviceUserName = $accessDeviceUserName;
        return $this;
    }

    /**
     * Getter for accessDeviceUserPassword
     *
     * @ElementName accessDeviceUserPassword
     * @return string|null
     */
    public function getAccessDeviceUserPassword()
    {
        return $this->accessDeviceUserPassword;
    }

    /**
     * Setter for accessDeviceUserPassword
     *
     * @ElementName accessDeviceUserPassword
     * @param string|null $accessDeviceUserPassword
     * @return $this
     */
    public function setAccessDeviceUserPassword($accessDeviceUserPassword)
    {
        $this->accessDeviceUserPassword = $accessDeviceUserPassword;
        return $this;
    }

    /**
     * Getter for deviceToken
     *
     * @ElementName deviceToken
     * @return string|null
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * Setter for deviceToken
     *
     * @ElementName deviceToken
     * @param string|null $deviceToken
     * @return $this
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
        return $this;
    }

    /**
     * Getter for signedPassword
     *
     * @ElementName signedPassword
     * @return string|null
     */
    public function getSignedPassword()
    {
        return $this->signedPassword;
    }

    /**
     * Setter for signedPassword
     *
     * @ElementName signedPassword
     * @param string|null $signedPassword
     * @return $this
     */
    public function setSignedPassword($signedPassword)
    {
        $this->signedPassword = $signedPassword;
        return $this;
    }

    /**
     * Getter for macAddress
     *
     * @ElementName macAddress
     * @return string|null
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * Setter for macAddress
     *
     * @ElementName macAddress
     * @param string|null $macAddress
     * @return $this
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    /**
     * Getter for realmName
     *
     * @ElementName realmName
     * @return string|null
     */
    public function getRealmName()
    {
        return $this->realmName;
    }

    /**
     * Setter for realmName
     *
     * @ElementName realmName
     * @param string|null $realmName
     * @return $this
     */
    public function setRealmName($realmName)
    {
        $this->realmName = $realmName;
        return $this;
    }

    /**
     * Getter for digestHa1Complement
     *
     * @ElementName digestHa1Complement
     * @return string|null
     */
    public function getDigestHa1Complement()
    {
        return $this->digestHa1Complement;
    }

    /**
     * Setter for digestHa1Complement
     *
     * @ElementName digestHa1Complement
     * @param string|null $digestHa1Complement
     * @return $this
     */
    public function setDigestHa1Complement($digestHa1Complement)
    {
        $this->digestHa1Complement = $digestHa1Complement;
        return $this;
    }

    /**
     * Getter for digestResponse
     *
     * @ElementName digestResponse
     * @return string|null
     */
    public function getDigestResponse()
    {
        return $this->digestResponse;
    }

    /**
     * Setter for digestResponse
     *
     * @ElementName digestResponse
     * @param string|null $digestResponse
     * @return $this
     */
    public function setDigestResponse($digestResponse)
    {
        $this->digestResponse = $digestResponse;
        return $this;
    }


}


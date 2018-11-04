<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementDeviceTypeModifyOptions
 *
 * Device Management System device type options during a modify request.
 */
class DeviceManagementDeviceTypeModifyOptions
{

    /**
     * @ElementName deviceAccessProtocol
     * @var string|null
     */
    private $deviceAccessProtocol = null;

    /**
     * @ElementName tagMode
     * @var string|null
     */
    private $tagMode = null;

    /**
     * @ElementName tagSet
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagSet = null;

    /**
     * @ElementName allowDeviceProfileCustomTagSet
     * @var bool|null
     */
    private $allowDeviceProfileCustomTagSet = null;

    /**
     * @ElementName allowGroupCustomTagSet
     * @var bool|null
     */
    private $allowGroupCustomTagSet = null;

    /**
     * @ElementName sendEmailUponResetFailure
     * @var bool|null
     */
    private $sendEmailUponResetFailure = null;

    /**
     * @ElementName deviceAccessNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessNetAddress = null;

    /**
     * @ElementName deviceAccessPort
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessPort = null;

    /**
     * @ElementName deviceAccessContext
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessContext = null;

    /**
     * @ElementName defaultDeviceLanguage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultDeviceLanguage = null;

    /**
     * @ElementName defaultDeviceEncoding
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultDeviceEncoding = null;

    /**
     * @ElementName accessDeviceCredentials
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceCredentials = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @var bool|null
     */
    private $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @var bool|null
     */
    private $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @var bool|null
     */
    private $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInNonRequestURI
     * @var bool|null
     */
    private $macInNonRequestURI = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $macFormatInNonRequestURI = null;

    /**
     * Getter for deviceAccessProtocol
     *
     * @ElementName deviceAccessProtocol
     * @return string|null
     */
    public function getDeviceAccessProtocol()
    {
        return $this->deviceAccessProtocol;
    }

    /**
     * Setter for deviceAccessProtocol
     *
     * @ElementName deviceAccessProtocol
     * @param string|null $deviceAccessProtocol
     * @return $this
     */
    public function setDeviceAccessProtocol($deviceAccessProtocol)
    {
        $this->deviceAccessProtocol = $deviceAccessProtocol;
        return $this;
    }

    /**
     * Getter for tagMode
     *
     * @ElementName tagMode
     * @return string|null
     */
    public function getTagMode()
    {
        return $this->tagMode;
    }

    /**
     * Setter for tagMode
     *
     * @ElementName tagMode
     * @param string|null $tagMode
     * @return $this
     */
    public function setTagMode($tagMode)
    {
        $this->tagMode = $tagMode;
        return $this;
    }

    /**
     * Getter for tagSet
     *
     * @ElementName tagSet
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTagSet()
    {
        return $this->tagSet;
    }

    /**
     * Setter for tagSet
     *
     * @ElementName tagSet
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $tagSet
     * @return $this
     */
    public function setTagSet($tagSet)
    {
        $this->tagSet = $tagSet;
        return $this;
    }

    /**
     * Getter for allowDeviceProfileCustomTagSet
     *
     * @ElementName allowDeviceProfileCustomTagSet
     * @return bool|null
     */
    public function getAllowDeviceProfileCustomTagSet()
    {
        return $this->allowDeviceProfileCustomTagSet;
    }

    /**
     * Setter for allowDeviceProfileCustomTagSet
     *
     * @ElementName allowDeviceProfileCustomTagSet
     * @param bool|null $allowDeviceProfileCustomTagSet
     * @return $this
     */
    public function setAllowDeviceProfileCustomTagSet($allowDeviceProfileCustomTagSet)
    {
        $this->allowDeviceProfileCustomTagSet = $allowDeviceProfileCustomTagSet;
        return $this;
    }

    /**
     * Getter for allowGroupCustomTagSet
     *
     * @ElementName allowGroupCustomTagSet
     * @return bool|null
     */
    public function getAllowGroupCustomTagSet()
    {
        return $this->allowGroupCustomTagSet;
    }

    /**
     * Setter for allowGroupCustomTagSet
     *
     * @ElementName allowGroupCustomTagSet
     * @param bool|null $allowGroupCustomTagSet
     * @return $this
     */
    public function setAllowGroupCustomTagSet($allowGroupCustomTagSet)
    {
        $this->allowGroupCustomTagSet = $allowGroupCustomTagSet;
        return $this;
    }

    /**
     * Getter for sendEmailUponResetFailure
     *
     * @ElementName sendEmailUponResetFailure
     * @return bool|null
     */
    public function getSendEmailUponResetFailure()
    {
        return $this->sendEmailUponResetFailure;
    }

    /**
     * Setter for sendEmailUponResetFailure
     *
     * @ElementName sendEmailUponResetFailure
     * @param bool|null $sendEmailUponResetFailure
     * @return $this
     */
    public function setSendEmailUponResetFailure($sendEmailUponResetFailure)
    {
        $this->sendEmailUponResetFailure = $sendEmailUponResetFailure;
        return $this;
    }

    /**
     * Getter for deviceAccessNetAddress
     *
     * @ElementName deviceAccessNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeviceAccessNetAddress()
    {
        return $this->deviceAccessNetAddress;
    }

    /**
     * Setter for deviceAccessNetAddress
     *
     * @ElementName deviceAccessNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deviceAccessNetAddress
     * @return $this
     */
    public function setDeviceAccessNetAddress($deviceAccessNetAddress)
    {
        $this->deviceAccessNetAddress = $deviceAccessNetAddress;
        return $this;
    }

    /**
     * Getter for deviceAccessPort
     *
     * @ElementName deviceAccessPort
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeviceAccessPort()
    {
        return $this->deviceAccessPort;
    }

    /**
     * Setter for deviceAccessPort
     *
     * @ElementName deviceAccessPort
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $deviceAccessPort
     * @return $this
     */
    public function setDeviceAccessPort($deviceAccessPort)
    {
        $this->deviceAccessPort = $deviceAccessPort;
        return $this;
    }

    /**
     * Getter for deviceAccessContext
     *
     * @ElementName deviceAccessContext
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeviceAccessContext()
    {
        return $this->deviceAccessContext;
    }

    /**
     * Setter for deviceAccessContext
     *
     * @ElementName deviceAccessContext
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deviceAccessContext
     * @return $this
     */
    public function setDeviceAccessContext($deviceAccessContext)
    {
        $this->deviceAccessContext = $deviceAccessContext;
        return $this;
    }

    /**
     * Getter for defaultDeviceLanguage
     *
     * @ElementName defaultDeviceLanguage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultDeviceLanguage()
    {
        return $this->defaultDeviceLanguage;
    }

    /**
     * Setter for defaultDeviceLanguage
     *
     * @ElementName defaultDeviceLanguage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultDeviceLanguage
     * @return $this
     */
    public function setDefaultDeviceLanguage($defaultDeviceLanguage)
    {
        $this->defaultDeviceLanguage = $defaultDeviceLanguage;
        return $this;
    }

    /**
     * Getter for defaultDeviceEncoding
     *
     * @ElementName defaultDeviceEncoding
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultDeviceEncoding()
    {
        return $this->defaultDeviceEncoding;
    }

    /**
     * Setter for defaultDeviceEncoding
     *
     * @ElementName defaultDeviceEncoding
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultDeviceEncoding
     * @return $this
     */
    public function setDefaultDeviceEncoding($defaultDeviceEncoding)
    {
        $this->defaultDeviceEncoding = $defaultDeviceEncoding;
        return $this;
    }

    /**
     * Getter for accessDeviceCredentials
     *
     * @ElementName accessDeviceCredentials
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @ElementName accessDeviceCredentials
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword|null|\CWM\BroadWorksConnector\Ocip\Nil $accessDeviceCredentials
     * @return $this
     */
    public function setAccessDeviceCredentials($accessDeviceCredentials)
    {
        $this->accessDeviceCredentials = $accessDeviceCredentials;
        return $this;
    }

    /**
     * Getter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @return bool|null
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication;
    }

    /**
     * Setter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @param bool|null $useHttpDigestAuthentication
     * @return $this
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $this->useHttpDigestAuthentication = $useHttpDigestAuthentication;
        return $this;
    }

    /**
     * Getter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @return bool|null
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication;
    }

    /**
     * Setter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @param bool|null $macBasedFileAuthentication
     * @return $this
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $this->macBasedFileAuthentication = $macBasedFileAuthentication;
        return $this;
    }

    /**
     * Getter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @return bool|null
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication;
    }

    /**
     * Setter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @param bool|null $userNamePasswordFileAuthentication
     * @return $this
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        return $this;
    }

    /**
     * Getter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @return bool|null
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI;
    }

    /**
     * Setter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @param bool|null $macInNonRequestURI
     * @return $this
     */
    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $this->macInNonRequestURI = $macInNonRequestURI;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementDeviceTypeOptions21sp1
 *
 * Device Management System device type options.
 *         
 *         Note: For the elements listed below, when device configuration is set to
 * deviceManagement, those elements apply to the creation of the Polycom Phone
 * Services directory file only.
 *               For all other files, they are not used. Those elements are instead
 * configured on a per-file basis at the Device Type File level.
 *               When device configuration is set to legacy, those elements apply
 * to all configuration files.
 *         
 *               useHttpDigestAuthentication
 *               macBasedFileAuthentication
 *               userNamePasswordFileAuthentication
 *               macInNonRequestURI
 *               macInCert
 *               macFormatInNonRequestURI
 */
class DeviceManagementDeviceTypeOptions21sp1
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
     * @var string|null
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
     * @var string|null
     */
    private $deviceAccessNetAddress = null;

    /**
     * @ElementName deviceAccessPort
     * @var int|null
     */
    private $deviceAccessPort = null;

    /**
     * @ElementName deviceAccessContext
     * @var string|null
     */
    private $deviceAccessContext = null;

    /**
     * @ElementName deviceAccessURI
     * @var string|null
     */
    private $deviceAccessURI = null;

    /**
     * @ElementName defaultDeviceLanguage
     * @var string|null
     */
    private $defaultDeviceLanguage = null;

    /**
     * @ElementName defaultDeviceEncoding
     * @var string|null
     */
    private $defaultDeviceEncoding = null;

    /**
     * @ElementName accessDeviceCredentials
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null
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
     * @ElementName macInCert
     * @var bool|null
     */
    private $macInCert = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @var string|null
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
     * @return string|null
     */
    public function getTagSet()
    {
        return $this->tagSet;
    }

    /**
     * Setter for tagSet
     *
     * @ElementName tagSet
     * @param string|null $tagSet
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
     * @return string|null
     */
    public function getDeviceAccessNetAddress()
    {
        return $this->deviceAccessNetAddress;
    }

    /**
     * Setter for deviceAccessNetAddress
     *
     * @ElementName deviceAccessNetAddress
     * @param string|null $deviceAccessNetAddress
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
     * @return int|null
     */
    public function getDeviceAccessPort()
    {
        return $this->deviceAccessPort;
    }

    /**
     * Setter for deviceAccessPort
     *
     * @ElementName deviceAccessPort
     * @param int|null $deviceAccessPort
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
     * @return string|null
     */
    public function getDeviceAccessContext()
    {
        return $this->deviceAccessContext;
    }

    /**
     * Setter for deviceAccessContext
     *
     * @ElementName deviceAccessContext
     * @param string|null $deviceAccessContext
     * @return $this
     */
    public function setDeviceAccessContext($deviceAccessContext)
    {
        $this->deviceAccessContext = $deviceAccessContext;
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
     * Getter for defaultDeviceLanguage
     *
     * @ElementName defaultDeviceLanguage
     * @return string|null
     */
    public function getDefaultDeviceLanguage()
    {
        return $this->defaultDeviceLanguage;
    }

    /**
     * Setter for defaultDeviceLanguage
     *
     * @ElementName defaultDeviceLanguage
     * @param string|null $defaultDeviceLanguage
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
     * @return string|null
     */
    public function getDefaultDeviceEncoding()
    {
        return $this->defaultDeviceEncoding;
    }

    /**
     * Setter for defaultDeviceEncoding
     *
     * @ElementName defaultDeviceEncoding
     * @param string|null $defaultDeviceEncoding
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @ElementName accessDeviceCredentials
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null $accessDeviceCredentials
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
     * Getter for macInCert
     *
     * @ElementName macInCert
     * @return bool|null
     */
    public function getMacInCert()
    {
        return $this->macInCert;
    }

    /**
     * Setter for macInCert
     *
     * @ElementName macInCert
     * @param bool|null $macInCert
     * @return $this
     */
    public function setMacInCert($macInCert)
    {
        $this->macInCert = $macInCert;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @return string|null
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @param string|null $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }


}


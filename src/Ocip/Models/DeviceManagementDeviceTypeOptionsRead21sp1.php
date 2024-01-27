<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementDeviceTypeOptionsRead21sp1
 *
 * Device Management System device type options.
 *         Note: For the elements listed below, when device configuration is set to deviceManagement, those elements apply to the creation of the Polycom Phone Services directory file only.
 *               For all other files, they are not used. Those elements are instead configured on a per-file basis at the Device Type File level.
 *               When device configuration is set to legacy, those elements apply to all configuration files.
 *         
 *               useHttpDigestAuthentication
 *               macBasedFileAuthentication
 *               userNamePasswordFileAuthentication
 *               macInNonRequestURI
 *               macInCert
 *               macFormatInNonRequestURI
 *
 * @see macInNonRequest
 * @see macFormatInNonRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49210","type":"sequence"}]
 */
class DeviceManagementDeviceTypeOptionsRead21sp1
{
    /**
     * @ElementName deviceAccessProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol16|null
     */
    protected $deviceAccessProtocol = null;

    /**
     * @ElementName tagMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagMode
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagMode|null
     */
    protected $tagMode = null;

    /**
     * @ElementName tagSet
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSet = null;

    /**
     * @ElementName allowDeviceProfileCustomTagSet
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $allowDeviceProfileCustomTagSet = null;

    /**
     * @ElementName allowGroupCustomTagSet
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $allowGroupCustomTagSet = null;

    /**
     * @ElementName sendEmailUponResetFailure
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $sendEmailUponResetFailure = null;

    /**
     * @ElementName deviceAccessNetAddress
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $deviceAccessNetAddress = null;

    /**
     * @ElementName deviceAccessPort
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $deviceAccessPort = null;

    /**
     * @ElementName deviceAccessContext
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $deviceAccessContext = null;

    /**
     * @ElementName deviceAccessURI
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $deviceAccessURI = null;

    /**
     * @ElementName defaultDeviceLanguage
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $defaultDeviceLanguage = null;

    /**
     * @ElementName defaultDeviceEncoding
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $defaultDeviceEncoding = null;

    /**
     * @ElementName accessDeviceCredentials
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $accessDeviceCredentials = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInNonRequestURI
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $macInNonRequestURI = null;

    /**
     * @ElementName macInCert
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @var bool|null
     */
    protected $macInCert = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49210
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $macFormatInNonRequestURI = null;

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
     * Getter for tagMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagMode
     */
    public function getTagMode()
    {
        return $this->tagMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagMode;
    }

    /**
     * Setter for tagMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagMode $tagMode
     * @return $this
     */
    public function setTagMode(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagMode $tagMode)
    {
        $this->tagMode = $tagMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagMode()
    {
        $this->tagMode = null;
        return $this;
    }

    /**
     * Getter for tagSet
     *
     * @return string
     */
    public function getTagSet()
    {
        return $this->tagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSet;
    }

    /**
     * Setter for tagSet
     *
     * @param string $tagSet
     * @return $this
     */
    public function setTagSet($tagSet)
    {
        $this->tagSet = $tagSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSet()
    {
        $this->tagSet = null;
        return $this;
    }

    /**
     * Getter for allowDeviceProfileCustomTagSet
     *
     * @return bool
     */
    public function getAllowDeviceProfileCustomTagSet()
    {
        return $this->allowDeviceProfileCustomTagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowDeviceProfileCustomTagSet;
    }

    /**
     * Setter for allowDeviceProfileCustomTagSet
     *
     * @param bool $allowDeviceProfileCustomTagSet
     * @return $this
     */
    public function setAllowDeviceProfileCustomTagSet($allowDeviceProfileCustomTagSet)
    {
        $this->allowDeviceProfileCustomTagSet = $allowDeviceProfileCustomTagSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowDeviceProfileCustomTagSet()
    {
        $this->allowDeviceProfileCustomTagSet = null;
        return $this;
    }

    /**
     * Getter for allowGroupCustomTagSet
     *
     * @return bool
     */
    public function getAllowGroupCustomTagSet()
    {
        return $this->allowGroupCustomTagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowGroupCustomTagSet;
    }

    /**
     * Setter for allowGroupCustomTagSet
     *
     * @param bool $allowGroupCustomTagSet
     * @return $this
     */
    public function setAllowGroupCustomTagSet($allowGroupCustomTagSet)
    {
        $this->allowGroupCustomTagSet = $allowGroupCustomTagSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowGroupCustomTagSet()
    {
        $this->allowGroupCustomTagSet = null;
        return $this;
    }

    /**
     * Getter for sendEmailUponResetFailure
     *
     * @return bool
     */
    public function getSendEmailUponResetFailure()
    {
        return $this->sendEmailUponResetFailure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendEmailUponResetFailure;
    }

    /**
     * Setter for sendEmailUponResetFailure
     *
     * @param bool $sendEmailUponResetFailure
     * @return $this
     */
    public function setSendEmailUponResetFailure($sendEmailUponResetFailure)
    {
        $this->sendEmailUponResetFailure = $sendEmailUponResetFailure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendEmailUponResetFailure()
    {
        $this->sendEmailUponResetFailure = null;
        return $this;
    }

    /**
     * Getter for deviceAccessNetAddress
     *
     * @return string
     */
    public function getDeviceAccessNetAddress()
    {
        return $this->deviceAccessNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessNetAddress;
    }

    /**
     * Setter for deviceAccessNetAddress
     *
     * @param string $deviceAccessNetAddress
     * @return $this
     */
    public function setDeviceAccessNetAddress($deviceAccessNetAddress)
    {
        $this->deviceAccessNetAddress = $deviceAccessNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessNetAddress()
    {
        $this->deviceAccessNetAddress = null;
        return $this;
    }

    /**
     * Getter for deviceAccessPort
     *
     * @return int
     */
    public function getDeviceAccessPort()
    {
        return $this->deviceAccessPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessPort;
    }

    /**
     * Setter for deviceAccessPort
     *
     * @param int $deviceAccessPort
     * @return $this
     */
    public function setDeviceAccessPort($deviceAccessPort)
    {
        $this->deviceAccessPort = $deviceAccessPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessPort()
    {
        $this->deviceAccessPort = null;
        return $this;
    }

    /**
     * Getter for deviceAccessContext
     *
     * @return string
     */
    public function getDeviceAccessContext()
    {
        return $this->deviceAccessContext instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessContext;
    }

    /**
     * Setter for deviceAccessContext
     *
     * @param string $deviceAccessContext
     * @return $this
     */
    public function setDeviceAccessContext($deviceAccessContext)
    {
        $this->deviceAccessContext = $deviceAccessContext;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessContext()
    {
        $this->deviceAccessContext = null;
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
     * Getter for defaultDeviceLanguage
     *
     * @return string
     */
    public function getDefaultDeviceLanguage()
    {
        return $this->defaultDeviceLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDeviceLanguage;
    }

    /**
     * Setter for defaultDeviceLanguage
     *
     * @param string $defaultDeviceLanguage
     * @return $this
     */
    public function setDefaultDeviceLanguage($defaultDeviceLanguage)
    {
        $this->defaultDeviceLanguage = $defaultDeviceLanguage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDeviceLanguage()
    {
        $this->defaultDeviceLanguage = null;
        return $this;
    }

    /**
     * Getter for defaultDeviceEncoding
     *
     * @return string
     */
    public function getDefaultDeviceEncoding()
    {
        return $this->defaultDeviceEncoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDeviceEncoding;
    }

    /**
     * Setter for defaultDeviceEncoding
     *
     * @param string $defaultDeviceEncoding
     * @return $this
     */
    public function setDefaultDeviceEncoding($defaultDeviceEncoding)
    {
        $this->defaultDeviceEncoding = $defaultDeviceEncoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDeviceEncoding()
    {
        $this->defaultDeviceEncoding = null;
        return $this;
    }

    /**
     * Getter for accessDeviceCredentials
     *
     * @return string
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @param string $accessDeviceCredentials
     * @return $this
     */
    public function setAccessDeviceCredentials($accessDeviceCredentials)
    {
        $this->accessDeviceCredentials = $accessDeviceCredentials;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceCredentials()
    {
        $this->accessDeviceCredentials = null;
        return $this;
    }

    /**
     * Getter for useHttpDigestAuthentication
     *
     * @return bool
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHttpDigestAuthentication;
    }

    /**
     * Setter for useHttpDigestAuthentication
     *
     * @param bool $useHttpDigestAuthentication
     * @return $this
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $this->useHttpDigestAuthentication = $useHttpDigestAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHttpDigestAuthentication()
    {
        $this->useHttpDigestAuthentication = null;
        return $this;
    }

    /**
     * Getter for macBasedFileAuthentication
     *
     * @return bool
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macBasedFileAuthentication;
    }

    /**
     * Setter for macBasedFileAuthentication
     *
     * @param bool $macBasedFileAuthentication
     * @return $this
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $this->macBasedFileAuthentication = $macBasedFileAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacBasedFileAuthentication()
    {
        $this->macBasedFileAuthentication = null;
        return $this;
    }

    /**
     * Getter for userNamePasswordFileAuthentication
     *
     * @return bool
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userNamePasswordFileAuthentication;
    }

    /**
     * Setter for userNamePasswordFileAuthentication
     *
     * @param bool $userNamePasswordFileAuthentication
     * @return $this
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserNamePasswordFileAuthentication()
    {
        $this->userNamePasswordFileAuthentication = null;
        return $this;
    }

    /**
     * Getter for macInNonRequestURI
     *
     * @return bool
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macInNonRequestURI;
    }

    /**
     * Setter for macInNonRequestURI
     *
     * @param bool $macInNonRequestURI
     * @return $this
     */
    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $this->macInNonRequestURI = $macInNonRequestURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacInNonRequestURI()
    {
        $this->macInNonRequestURI = null;
        return $this;
    }

    /**
     * Getter for macInCert
     *
     * @return bool
     */
    public function getMacInCert()
    {
        return $this->macInCert instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macInCert;
    }

    /**
     * Setter for macInCert
     *
     * @param bool $macInCert
     * @return $this
     */
    public function setMacInCert($macInCert)
    {
        $this->macInCert = $macInCert;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacInCert()
    {
        $this->macInCert = null;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @return string
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @param string $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacFormatInNonRequestURI()
    {
        $this->macFormatInNonRequestURI = null;
        return $this;
    }
}


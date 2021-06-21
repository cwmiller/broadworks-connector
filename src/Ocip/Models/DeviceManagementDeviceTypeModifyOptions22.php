<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementDeviceTypeModifyOptions22
 *
 * Device Management System device type options during a modify request.
 *
 *         The following data elements are only used in AS data mode and ignored in XS data mode:
 *           enableDeviceActivation
 *           deviceModel
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2063","type":"sequence"}]
 */
class DeviceManagementDeviceTypeModifyOptions22
{

    /**
     * @ElementName deviceAccessProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol22
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol22|null
     */
    private $deviceAccessProtocol = null;

    /**
     * @ElementName tagMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagMode
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagMode|null
     */
    private $tagMode = null;

    /**
     * @ElementName tagSet
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagSet = null;

    /**
     * @ElementName allowDeviceProfileCustomTagSet
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $allowDeviceProfileCustomTagSet = null;

    /**
     * @ElementName allowGroupCustomTagSet
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $allowGroupCustomTagSet = null;

    /**
     * @ElementName allowSpCustomTagSet
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $allowSpCustomTagSet = null;

    /**
     * @ElementName sendEmailUponResetFailure
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $sendEmailUponResetFailure = null;

    /**
     * @ElementName deviceAccessNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessNetAddress = null;

    /**
     * @ElementName deviceAccessPort
     * @Type int
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessPort = null;

    /**
     * @ElementName deviceAccessContext
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessContext = null;

    /**
     * @ElementName defaultDeviceLanguage
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultDeviceLanguage = null;

    /**
     * @ElementName defaultDeviceEncoding
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultDeviceEncoding = null;

    /**
     * @ElementName accessDeviceCredentials
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceCredentials = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInNonRequestURI
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $macInNonRequestURI = null;

    /**
     * @ElementName macInCert
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $macInCert = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $macFormatInNonRequestURI = null;

    /**
     * @ElementName enableDeviceActivation
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @var bool|null
     */
    private $enableDeviceActivation = null;

    /**
     * @ElementName deviceModel
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2063
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceModel = null;

    /**
     * Getter for deviceAccessProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol22
     */
    public function getDeviceAccessProtocol()
    {
        return $this->deviceAccessProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessProtocol;
    }

    /**
     * Setter for deviceAccessProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol22 $deviceAccessProtocol
     * @return $this
     */
    public function setDeviceAccessProtocol(\CWM\BroadWorksConnector\Ocip\Models\DeviceAccessProtocol22 $deviceAccessProtocol)
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
     * @return string|null
     */
    public function getTagSet()
    {
        return $this->tagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSet;
    }

    /**
     * Setter for tagSet
     *
     * @param string|null $tagSet
     * @return $this
     */
    public function setTagSet($tagSet = null)
    {
        if ($tagSet === null) {
            $this->tagSet = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->tagSet = $tagSet;
        }
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
     * Getter for allowSpCustomTagSet
     *
     * @return bool
     */
    public function getAllowSpCustomTagSet()
    {
        return $this->allowSpCustomTagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowSpCustomTagSet;
    }

    /**
     * Setter for allowSpCustomTagSet
     *
     * @param bool $allowSpCustomTagSet
     * @return $this
     */
    public function setAllowSpCustomTagSet($allowSpCustomTagSet)
    {
        $this->allowSpCustomTagSet = $allowSpCustomTagSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowSpCustomTagSet()
    {
        $this->allowSpCustomTagSet = null;
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
     * @return string|null
     */
    public function getDeviceAccessNetAddress()
    {
        return $this->deviceAccessNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessNetAddress;
    }

    /**
     * Setter for deviceAccessNetAddress
     *
     * @param string|null $deviceAccessNetAddress
     * @return $this
     */
    public function setDeviceAccessNetAddress($deviceAccessNetAddress = null)
    {
        if ($deviceAccessNetAddress === null) {
            $this->deviceAccessNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceAccessNetAddress = $deviceAccessNetAddress;
        }
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
     * @return int|null
     */
    public function getDeviceAccessPort()
    {
        return $this->deviceAccessPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessPort;
    }

    /**
     * Setter for deviceAccessPort
     *
     * @param int|null $deviceAccessPort
     * @return $this
     */
    public function setDeviceAccessPort($deviceAccessPort = null)
    {
        if ($deviceAccessPort === null) {
            $this->deviceAccessPort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceAccessPort = $deviceAccessPort;
        }
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
     * @return string|null
     */
    public function getDeviceAccessContext()
    {
        return $this->deviceAccessContext instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessContext;
    }

    /**
     * Setter for deviceAccessContext
     *
     * @param string|null $deviceAccessContext
     * @return $this
     */
    public function setDeviceAccessContext($deviceAccessContext = null)
    {
        if ($deviceAccessContext === null) {
            $this->deviceAccessContext = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceAccessContext = $deviceAccessContext;
        }
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
     * Getter for defaultDeviceLanguage
     *
     * @return string|null
     */
    public function getDefaultDeviceLanguage()
    {
        return $this->defaultDeviceLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDeviceLanguage;
    }

    /**
     * Setter for defaultDeviceLanguage
     *
     * @param string|null $defaultDeviceLanguage
     * @return $this
     */
    public function setDefaultDeviceLanguage($defaultDeviceLanguage = null)
    {
        if ($defaultDeviceLanguage === null) {
            $this->defaultDeviceLanguage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultDeviceLanguage = $defaultDeviceLanguage;
        }
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
     * @return string|null
     */
    public function getDefaultDeviceEncoding()
    {
        return $this->defaultDeviceEncoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDeviceEncoding;
    }

    /**
     * Setter for defaultDeviceEncoding
     *
     * @param string|null $defaultDeviceEncoding
     * @return $this
     */
    public function setDefaultDeviceEncoding($defaultDeviceEncoding = null)
    {
        if ($defaultDeviceEncoding === null) {
            $this->defaultDeviceEncoding = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultDeviceEncoding = $defaultDeviceEncoding;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceCredentials;
    }

    /**
     * Setter for accessDeviceCredentials
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16|null $accessDeviceCredentials
     * @return $this
     */
    public function setAccessDeviceCredentials(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementUserNamePassword16 $accessDeviceCredentials = null)
    {
        if ($accessDeviceCredentials === null) {
            $this->accessDeviceCredentials = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDeviceCredentials = $accessDeviceCredentials;
        }
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
     * @return string|null
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @param string|null $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        if ($macFormatInNonRequestURI === null) {
            $this->macFormatInNonRequestURI = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        }
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

    /**
     * Getter for enableDeviceActivation
     *
     * @return bool
     */
    public function getEnableDeviceActivation()
    {
        return $this->enableDeviceActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDeviceActivation;
    }

    /**
     * Setter for enableDeviceActivation
     *
     * @param bool $enableDeviceActivation
     * @return $this
     */
    public function setEnableDeviceActivation($enableDeviceActivation)
    {
        $this->enableDeviceActivation = $enableDeviceActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDeviceActivation()
    {
        $this->enableDeviceActivation = null;
        return $this;
    }

    /**
     * Getter for deviceModel
     *
     * @return string|null
     */
    public function getDeviceModel()
    {
        return $this->deviceModel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceModel;
    }

    /**
     * Setter for deviceModel
     *
     * @param string|null $deviceModel
     * @return $this
     */
    public function setDeviceModel($deviceModel = null)
    {
        if ($deviceModel === null) {
            $this->deviceModel = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceModel = $deviceModel;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceModel()
    {
        $this->deviceModel = null;
        return $this;
    }


}


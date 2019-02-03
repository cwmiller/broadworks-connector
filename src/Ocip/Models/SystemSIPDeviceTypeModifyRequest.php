<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeModifyRequest
 *
 * Request to modify a sip device type.
 *                 The following elements are not changeable:
 *                 numberOfPorts
 *                 SignalingAddressType
 *                 isConferenceDevice
 *                 isMusicOnHoldDevice
 *                 The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6374","type":"sequence"}]
 */
class SystemSIPDeviceTypeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName isObsolete
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $isObsolete = null;

    /**
     * @ElementName registrationCapable
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $registrationCapable = null;

    /**
     * @ElementName authenticationOverride
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $authenticationOverride = null;

    /**
     * @ElementName RFC3264Hold
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $RFC3264Hold = null;

    /**
     * @ElementName isTrusted
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $isTrusted = null;

    /**
     * @ElementName E164Capable
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $E164Capable = null;

    /**
     * @ElementName routeAdvance
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $routeAdvance = null;

    /**
     * @ElementName forwardingOverride
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $forwardingOverride = null;

    /**
     * @ElementName wirelessIntegration
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $wirelessIntegration = null;

    /**
     * @ElementName webBasedConfigURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $webBasedConfigURL = null;

    /**
     * @ElementName isVideoCapable
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $isVideoCapable = null;

    /**
     * @ElementName PBXIntegration
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $PBXIntegration = null;

    /**
     * @ElementName useBusinessTrunkingContact
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $useBusinessTrunkingContact = null;

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions|null
     */
    private $cpeDeviceOptions = null;

    /**
     * @ElementName earlyMediaSupport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6374
     * @var \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null
     */
    private $earlyMediaSupport = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for isObsolete
     *
     * @return bool
     */
    public function getIsObsolete()
    {
        return $this->isObsolete instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isObsolete;
    }

    /**
     * Setter for isObsolete
     *
     * @param bool $isObsolete
     * @return $this
     */
    public function setIsObsolete($isObsolete)
    {
        $this->isObsolete = $isObsolete;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsObsolete()
    {
        $this->isObsolete = null;
        return $this;
    }

    /**
     * Getter for registrationCapable
     *
     * @return bool
     */
    public function getRegistrationCapable()
    {
        return $this->registrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationCapable;
    }

    /**
     * Setter for registrationCapable
     *
     * @param bool $registrationCapable
     * @return $this
     */
    public function setRegistrationCapable($registrationCapable)
    {
        $this->registrationCapable = $registrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationCapable()
    {
        $this->registrationCapable = null;
        return $this;
    }

    /**
     * Getter for authenticationOverride
     *
     * @return bool
     */
    public function getAuthenticationOverride()
    {
        return $this->authenticationOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authenticationOverride;
    }

    /**
     * Setter for authenticationOverride
     *
     * @param bool $authenticationOverride
     * @return $this
     */
    public function setAuthenticationOverride($authenticationOverride)
    {
        $this->authenticationOverride = $authenticationOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthenticationOverride()
    {
        $this->authenticationOverride = null;
        return $this;
    }

    /**
     * Getter for RFC3264Hold
     *
     * @return bool
     */
    public function getRFC3264Hold()
    {
        return $this->RFC3264Hold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->RFC3264Hold;
    }

    /**
     * Setter for RFC3264Hold
     *
     * @param bool $RFC3264Hold
     * @return $this
     */
    public function setRFC3264Hold($RFC3264Hold)
    {
        $this->RFC3264Hold = $RFC3264Hold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRFC3264Hold()
    {
        $this->RFC3264Hold = null;
        return $this;
    }

    /**
     * Getter for isTrusted
     *
     * @return bool
     */
    public function getIsTrusted()
    {
        return $this->isTrusted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isTrusted;
    }

    /**
     * Setter for isTrusted
     *
     * @param bool $isTrusted
     * @return $this
     */
    public function setIsTrusted($isTrusted)
    {
        $this->isTrusted = $isTrusted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsTrusted()
    {
        $this->isTrusted = null;
        return $this;
    }

    /**
     * Getter for E164Capable
     *
     * @return bool
     */
    public function getE164Capable()
    {
        return $this->E164Capable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->E164Capable;
    }

    /**
     * Setter for E164Capable
     *
     * @param bool $E164Capable
     * @return $this
     */
    public function setE164Capable($E164Capable)
    {
        $this->E164Capable = $E164Capable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetE164Capable()
    {
        $this->E164Capable = null;
        return $this;
    }

    /**
     * Getter for routeAdvance
     *
     * @return bool
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeAdvance;
    }

    /**
     * Setter for routeAdvance
     *
     * @param bool $routeAdvance
     * @return $this
     */
    public function setRouteAdvance($routeAdvance)
    {
        $this->routeAdvance = $routeAdvance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteAdvance()
    {
        $this->routeAdvance = null;
        return $this;
    }

    /**
     * Getter for forwardingOverride
     *
     * @return bool
     */
    public function getForwardingOverride()
    {
        return $this->forwardingOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardingOverride;
    }

    /**
     * Setter for forwardingOverride
     *
     * @param bool $forwardingOverride
     * @return $this
     */
    public function setForwardingOverride($forwardingOverride)
    {
        $this->forwardingOverride = $forwardingOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardingOverride()
    {
        $this->forwardingOverride = null;
        return $this;
    }

    /**
     * Getter for wirelessIntegration
     *
     * @return bool
     */
    public function getWirelessIntegration()
    {
        return $this->wirelessIntegration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wirelessIntegration;
    }

    /**
     * Setter for wirelessIntegration
     *
     * @param bool $wirelessIntegration
     * @return $this
     */
    public function setWirelessIntegration($wirelessIntegration)
    {
        $this->wirelessIntegration = $wirelessIntegration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWirelessIntegration()
    {
        $this->wirelessIntegration = null;
        return $this;
    }

    /**
     * Getter for webBasedConfigURL
     *
     * @return string|null
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webBasedConfigURL;
    }

    /**
     * Setter for webBasedConfigURL
     *
     * @param string|null $webBasedConfigURL
     * @return $this
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        if ($webBasedConfigURL === null) {
            $this->webBasedConfigURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->webBasedConfigURL = $webBasedConfigURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebBasedConfigURL()
    {
        $this->webBasedConfigURL = null;
        return $this;
    }

    /**
     * Getter for isVideoCapable
     *
     * @return bool
     */
    public function getIsVideoCapable()
    {
        return $this->isVideoCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isVideoCapable;
    }

    /**
     * Setter for isVideoCapable
     *
     * @param bool $isVideoCapable
     * @return $this
     */
    public function setIsVideoCapable($isVideoCapable)
    {
        $this->isVideoCapable = $isVideoCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsVideoCapable()
    {
        $this->isVideoCapable = null;
        return $this;
    }

    /**
     * Getter for PBXIntegration
     *
     * @return bool
     */
    public function getPBXIntegration()
    {
        return $this->PBXIntegration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->PBXIntegration;
    }

    /**
     * Setter for PBXIntegration
     *
     * @param bool $PBXIntegration
     * @return $this
     */
    public function setPBXIntegration($PBXIntegration)
    {
        $this->PBXIntegration = $PBXIntegration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPBXIntegration()
    {
        $this->PBXIntegration = null;
        return $this;
    }

    /**
     * Getter for useBusinessTrunkingContact
     *
     * @return bool
     */
    public function getUseBusinessTrunkingContact()
    {
        return $this->useBusinessTrunkingContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useBusinessTrunkingContact;
    }

    /**
     * Setter for useBusinessTrunkingContact
     *
     * @param bool $useBusinessTrunkingContact
     * @return $this
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact)
    {
        $this->useBusinessTrunkingContact = $useBusinessTrunkingContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseBusinessTrunkingContact()
    {
        $this->useBusinessTrunkingContact = null;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @return bool
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @param bool $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticRegistrationCapable()
    {
        $this->staticRegistrationCapable = null;
        return $this;
    }

    /**
     * Getter for cpeDeviceOptions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceModifyOptions $cpeDeviceOptions)
    {
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCpeDeviceOptions()
    {
        $this->cpeDeviceOptions = null;
        return $this;
    }

    /**
     * Getter for earlyMediaSupport
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->earlyMediaSupport;
    }

    /**
     * Setter for earlyMediaSupport
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport
     * @return $this
     */
    public function setEarlyMediaSupport(\CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport)
    {
        $this->earlyMediaSupport = $earlyMediaSupport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEarlyMediaSupport()
    {
        $this->earlyMediaSupport = null;
        return $this;
    }


}


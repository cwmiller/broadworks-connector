<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetDNISResponse
 *
 * Response to the GroupRoutePointGetDNISRequest.
 *
 * @see GroupRoutePointGetDNISRequest
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:501","type":"sequence"}]
 */
class GroupRoutePointGetDNISResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dnisPhoneNumber
     * @Type string
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $dnisPhoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    protected $extension = null;

    /**
     * @ElementName useCustomCLIDSettings
     * @Type bool
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @var bool|null
     */
    protected $useCustomCLIDSettings = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $callingLineIdPhoneNumber = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Optional
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $callingLineIdFirstName = null;

    /**
     * @ElementName useCustomDnisAnnouncementSettings
     * @Type bool
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @var bool|null
     */
    protected $useCustomDnisAnnouncementSettings = null;

    /**
     * @ElementName allowOutgoingACDCall
     * @Type bool
     * @Group e474d11df9a1d1d1041e589793e40de8:501
     * @var bool|null
     */
    protected $allowOutgoingACDCall = null;

    /**
     * Getter for dnisPhoneNumber
     *
     * @return string
     */
    public function getDnisPhoneNumber()
    {
        return $this->dnisPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisPhoneNumber;
    }

    /**
     * Setter for dnisPhoneNumber
     *
     * @param string $dnisPhoneNumber
     * @return $this
     */
    public function setDnisPhoneNumber($dnisPhoneNumber)
    {
        $this->dnisPhoneNumber = $dnisPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisPhoneNumber()
    {
        $this->dnisPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }

    /**
     * Getter for useCustomCLIDSettings
     *
     * @return bool
     */
    public function getUseCustomCLIDSettings()
    {
        return $this->useCustomCLIDSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCustomCLIDSettings;
    }

    /**
     * Setter for useCustomCLIDSettings
     *
     * @param bool $useCustomCLIDSettings
     * @return $this
     */
    public function setUseCustomCLIDSettings($useCustomCLIDSettings)
    {
        $this->useCustomCLIDSettings = $useCustomCLIDSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCustomCLIDSettings()
    {
        $this->useCustomCLIDSettings = null;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for callingLineIdLastName
     *
     * @return string
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdLastName;
    }

    /**
     * Setter for callingLineIdLastName
     *
     * @param string $callingLineIdLastName
     * @return $this
     */
    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $this->callingLineIdLastName = $callingLineIdLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdLastName()
    {
        $this->callingLineIdLastName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdFirstName
     *
     * @return string
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdFirstName;
    }

    /**
     * Setter for callingLineIdFirstName
     *
     * @param string $callingLineIdFirstName
     * @return $this
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $this->callingLineIdFirstName = $callingLineIdFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdFirstName()
    {
        $this->callingLineIdFirstName = null;
        return $this;
    }

    /**
     * Getter for useCustomDnisAnnouncementSettings
     *
     * @return bool
     */
    public function getUseCustomDnisAnnouncementSettings()
    {
        return $this->useCustomDnisAnnouncementSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCustomDnisAnnouncementSettings;
    }

    /**
     * Setter for useCustomDnisAnnouncementSettings
     *
     * @param bool $useCustomDnisAnnouncementSettings
     * @return $this
     */
    public function setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings)
    {
        $this->useCustomDnisAnnouncementSettings = $useCustomDnisAnnouncementSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCustomDnisAnnouncementSettings()
    {
        $this->useCustomDnisAnnouncementSettings = null;
        return $this;
    }

    /**
     * Getter for allowOutgoingACDCall
     *
     * @return bool
     */
    public function getAllowOutgoingACDCall()
    {
        return $this->allowOutgoingACDCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowOutgoingACDCall;
    }

    /**
     * Setter for allowOutgoingACDCall
     *
     * @param bool $allowOutgoingACDCall
     * @return $this
     */
    public function setAllowOutgoingACDCall($allowOutgoingACDCall)
    {
        $this->allowOutgoingACDCall = $allowOutgoingACDCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowOutgoingACDCall()
    {
        $this->allowOutgoingACDCall = null;
        return $this;
    }
}


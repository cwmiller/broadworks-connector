<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISResponse
 *
 * Response to the GroupCallCenterGetDNISResponse.
 *
 * @see GroupCallCenterGetDNISResponse
 */
class GroupCallCenterGetDNISResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnisPhoneNumber
     * @var string|null
     */
    private $dnisPhoneNumber = null;

    /**
     * @ElementName extension
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName useCustomCLIDSettings
     * @var bool|null
     */
    private $useCustomCLIDSettings = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName callingLineIdLastName
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName useCustomDnisAnnouncementSettings
     * @var bool|null
     */
    private $useCustomDnisAnnouncementSettings = null;

    /**
     * @ElementName priority
     * @var string|null
     */
    private $priority = null;

    /**
     * @ElementName allowOutgoingACDCall
     * @var bool|null
     */
    private $allowOutgoingACDCall = null;

    /**
     * Getter for dnisPhoneNumber
     *
     * @ElementName dnisPhoneNumber
     * @return string|null
     */
    public function getDnisPhoneNumber()
    {
        return $this->dnisPhoneNumber;
    }

    /**
     * Setter for dnisPhoneNumber
     *
     * @ElementName dnisPhoneNumber
     * @param string|null $dnisPhoneNumber
     * @return $this
     */
    public function setDnisPhoneNumber($dnisPhoneNumber)
    {
        $this->dnisPhoneNumber = $dnisPhoneNumber;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @ElementName extension
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Getter for useCustomCLIDSettings
     *
     * @ElementName useCustomCLIDSettings
     * @return bool|null
     */
    public function getUseCustomCLIDSettings()
    {
        return $this->useCustomCLIDSettings;
    }

    /**
     * Setter for useCustomCLIDSettings
     *
     * @ElementName useCustomCLIDSettings
     * @param bool|null $useCustomCLIDSettings
     * @return $this
     */
    public function setUseCustomCLIDSettings($useCustomCLIDSettings)
    {
        $this->useCustomCLIDSettings = $useCustomCLIDSettings;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * Getter for callingLineIdLastName
     *
     * @ElementName callingLineIdLastName
     * @return string|null
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName;
    }

    /**
     * Setter for callingLineIdLastName
     *
     * @ElementName callingLineIdLastName
     * @param string|null $callingLineIdLastName
     * @return $this
     */
    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $this->callingLineIdLastName = $callingLineIdLastName;
        return $this;
    }

    /**
     * Getter for callingLineIdFirstName
     *
     * @ElementName callingLineIdFirstName
     * @return string|null
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName;
    }

    /**
     * Setter for callingLineIdFirstName
     *
     * @ElementName callingLineIdFirstName
     * @param string|null $callingLineIdFirstName
     * @return $this
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $this->callingLineIdFirstName = $callingLineIdFirstName;
        return $this;
    }

    /**
     * Getter for useCustomDnisAnnouncementSettings
     *
     * @ElementName useCustomDnisAnnouncementSettings
     * @return bool|null
     */
    public function getUseCustomDnisAnnouncementSettings()
    {
        return $this->useCustomDnisAnnouncementSettings;
    }

    /**
     * Setter for useCustomDnisAnnouncementSettings
     *
     * @ElementName useCustomDnisAnnouncementSettings
     * @param bool|null $useCustomDnisAnnouncementSettings
     * @return $this
     */
    public function setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings)
    {
        $this->useCustomDnisAnnouncementSettings = $useCustomDnisAnnouncementSettings;
        return $this;
    }

    /**
     * Getter for priority
     *
     * @ElementName priority
     * @return string|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param string|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Getter for allowOutgoingACDCall
     *
     * @ElementName allowOutgoingACDCall
     * @return bool|null
     */
    public function getAllowOutgoingACDCall()
    {
        return $this->allowOutgoingACDCall;
    }

    /**
     * Setter for allowOutgoingACDCall
     *
     * @ElementName allowOutgoingACDCall
     * @param bool|null $allowOutgoingACDCall
     * @return $this
     */
    public function setAllowOutgoingACDCall($allowOutgoingACDCall)
    {
        $this->allowOutgoingACDCall = $allowOutgoingACDCall;
        return $this;
    }


}


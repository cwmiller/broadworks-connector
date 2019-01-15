<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyDNISRequest
 *
 * Modify a route point's DNIS settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:792","type":"sequence"}]
 */
class GroupRoutePointModifyDNISRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $dnisKey = null;

    /**
     * @ElementName newDNISName
     * @Type string
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var string|null
     */
    private $newDNISName = null;

    /**
     * @ElementName dnisPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $dnisPhoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extension = null;

    /**
     * @ElementName useCustomCLIDSettings
     * @Type bool
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var bool|null
     */
    private $useCustomCLIDSettings = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName useCustomDnisAnnouncementSettings
     * @Type bool
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var bool|null
     */
    private $useCustomDnisAnnouncementSettings = null;

    /**
     * @ElementName allowOutgoingACDCall
     * @Type bool
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:792
     * @var bool|null
     */
    private $allowOutgoingACDCall = null;

    /**
     * Getter for dnisKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisKey()
    {
        $this->dnisKey = null;
        return $this;
    }

    /**
     * Getter for newDNISName
     *
     * @return string
     */
    public function getNewDNISName()
    {
        return $this->newDNISName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newDNISName;
    }

    /**
     * Setter for newDNISName
     *
     * @param string $newDNISName
     * @return $this
     */
    public function setNewDNISName($newDNISName)
    {
        $this->newDNISName = $newDNISName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewDNISName()
    {
        $this->newDNISName = null;
        return $this;
    }

    /**
     * Getter for dnisPhoneNumber
     *
     * @return string|null
     */
    public function getDnisPhoneNumber()
    {
        return $this->dnisPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisPhoneNumber;
    }

    /**
     * Setter for dnisPhoneNumber
     *
     * @param string|null $dnisPhoneNumber
     * @return $this
     */
    public function setDnisPhoneNumber($dnisPhoneNumber = null)
    {
        if ($dnisPhoneNumber === null) {
            $this->dnisPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->dnisPhoneNumber = $dnisPhoneNumber;
        }
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
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension = null)
    {
        if ($extension === null) {
            $this->extension = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extension = $extension;
        }
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
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        if ($callingLineIdPhoneNumber === null) {
            $this->callingLineIdPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        }
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
     * @return string|null
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdLastName;
    }

    /**
     * Setter for callingLineIdLastName
     *
     * @param string|null $callingLineIdLastName
     * @return $this
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        if ($callingLineIdLastName === null) {
            $this->callingLineIdLastName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdLastName = $callingLineIdLastName;
        }
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
     * @return string|null
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdFirstName;
    }

    /**
     * Setter for callingLineIdFirstName
     *
     * @param string|null $callingLineIdFirstName
     * @return $this
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        if ($callingLineIdFirstName === null) {
            $this->callingLineIdFirstName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdFirstName = $callingLineIdFirstName;
        }
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


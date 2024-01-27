<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLocationBasedCallingRestrictionsModifyRequest
 *
 * Modifies the system level Location Based Calling Restriction attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4489f4baeefa41b8df0a86def4c05cd8:81","type":"sequence"}]
 */
class SystemLocationBasedCallingRestrictionsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName physicalLocationIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator
     * @Optional
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator|null
     */
    protected $physicalLocationIndicator = null;

    /**
     * @ElementName enforceMscValidation
     * @Type bool
     * @Optional
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:81
     * @var bool|null
     */
    protected $enforceMscValidation = null;

    /**
     * @ElementName enableOfficeZoneAnnouncement
     * @Type bool
     * @Optional
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:81
     * @var bool|null
     */
    protected $enableOfficeZoneAnnouncement = null;

    /**
     * @ElementName enhanceOfficeZone
     * @Type bool
     * @Optional
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:81
     * @var bool|null
     */
    protected $enhanceOfficeZone = null;

    /**
     * @ElementName enableMccMncBasedLocation
     * @Type bool
     * @Optional
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:81
     * @var bool|null
     */
    protected $enableMccMncBasedLocation = null;

    /**
     * @ElementName mccMncRoamingNetworkTranslationIndex
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:81
     * @MinLength 1
     * @MaxLength 128
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $mccMncRoamingNetworkTranslationIndex = null;

    /**
     * @ElementName defaultMccMncBasedLocation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DefaultMccMncBasedLocation
     * @Optional
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\DefaultMccMncBasedLocation|null
     */
    protected $defaultMccMncBasedLocation = null;

    /**
     * Getter for physicalLocationIndicator
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator
     */
    public function getPhysicalLocationIndicator()
    {
        return $this->physicalLocationIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocationIndicator;
    }

    /**
     * Setter for physicalLocationIndicator
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator $physicalLocationIndicator
     * @return $this
     */
    public function setPhysicalLocationIndicator(\CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator $physicalLocationIndicator)
    {
        $this->physicalLocationIndicator = $physicalLocationIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhysicalLocationIndicator()
    {
        $this->physicalLocationIndicator = null;
        return $this;
    }

    /**
     * Getter for enforceMscValidation
     *
     * @return bool
     */
    public function getEnforceMscValidation()
    {
        return $this->enforceMscValidation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceMscValidation;
    }

    /**
     * Setter for enforceMscValidation
     *
     * @param bool $enforceMscValidation
     * @return $this
     */
    public function setEnforceMscValidation($enforceMscValidation)
    {
        $this->enforceMscValidation = $enforceMscValidation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceMscValidation()
    {
        $this->enforceMscValidation = null;
        return $this;
    }

    /**
     * Getter for enableOfficeZoneAnnouncement
     *
     * @return bool
     */
    public function getEnableOfficeZoneAnnouncement()
    {
        return $this->enableOfficeZoneAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableOfficeZoneAnnouncement;
    }

    /**
     * Setter for enableOfficeZoneAnnouncement
     *
     * @param bool $enableOfficeZoneAnnouncement
     * @return $this
     */
    public function setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement)
    {
        $this->enableOfficeZoneAnnouncement = $enableOfficeZoneAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableOfficeZoneAnnouncement()
    {
        $this->enableOfficeZoneAnnouncement = null;
        return $this;
    }

    /**
     * Getter for enhanceOfficeZone
     *
     * @return bool
     */
    public function getEnhanceOfficeZone()
    {
        return $this->enhanceOfficeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enhanceOfficeZone;
    }

    /**
     * Setter for enhanceOfficeZone
     *
     * @param bool $enhanceOfficeZone
     * @return $this
     */
    public function setEnhanceOfficeZone($enhanceOfficeZone)
    {
        $this->enhanceOfficeZone = $enhanceOfficeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnhanceOfficeZone()
    {
        $this->enhanceOfficeZone = null;
        return $this;
    }

    /**
     * Getter for enableMccMncBasedLocation
     *
     * @return bool
     */
    public function getEnableMccMncBasedLocation()
    {
        return $this->enableMccMncBasedLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMccMncBasedLocation;
    }

    /**
     * Setter for enableMccMncBasedLocation
     *
     * @param bool $enableMccMncBasedLocation
     * @return $this
     */
    public function setEnableMccMncBasedLocation($enableMccMncBasedLocation)
    {
        $this->enableMccMncBasedLocation = $enableMccMncBasedLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMccMncBasedLocation()
    {
        $this->enableMccMncBasedLocation = null;
        return $this;
    }

    /**
     * Getter for mccMncRoamingNetworkTranslationIndex
     *
     * @return string|null
     */
    public function getMccMncRoamingNetworkTranslationIndex()
    {
        return $this->mccMncRoamingNetworkTranslationIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mccMncRoamingNetworkTranslationIndex;
    }

    /**
     * Setter for mccMncRoamingNetworkTranslationIndex
     *
     * @param string|null $mccMncRoamingNetworkTranslationIndex
     * @return $this
     */
    public function setMccMncRoamingNetworkTranslationIndex($mccMncRoamingNetworkTranslationIndex = null)
    {
        if ($mccMncRoamingNetworkTranslationIndex === null) {
            $this->mccMncRoamingNetworkTranslationIndex = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mccMncRoamingNetworkTranslationIndex = $mccMncRoamingNetworkTranslationIndex;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMccMncRoamingNetworkTranslationIndex()
    {
        $this->mccMncRoamingNetworkTranslationIndex = null;
        return $this;
    }

    /**
     * Getter for defaultMccMncBasedLocation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DefaultMccMncBasedLocation
     */
    public function getDefaultMccMncBasedLocation()
    {
        return $this->defaultMccMncBasedLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultMccMncBasedLocation;
    }

    /**
     * Setter for defaultMccMncBasedLocation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DefaultMccMncBasedLocation $defaultMccMncBasedLocation
     * @return $this
     */
    public function setDefaultMccMncBasedLocation(\CWM\BroadWorksConnector\Ocip\Models\DefaultMccMncBasedLocation $defaultMccMncBasedLocation)
    {
        $this->defaultMccMncBasedLocation = $defaultMccMncBasedLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultMccMncBasedLocation()
    {
        $this->defaultMccMncBasedLocation = null;
        return $this;
    }
}


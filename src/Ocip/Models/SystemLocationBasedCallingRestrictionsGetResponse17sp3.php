<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLocationBasedCallingRestrictionsGetResponse17sp3
 *
 * Response to SystemLocationBasedCallingRestrictionsGetRequest17sp3.
 *
 * @see SystemLocationBasedCallingRestrictionsGetRequest17sp3
 */
class SystemLocationBasedCallingRestrictionsGetResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName physicalLocationIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator|null
     */
    private $physicalLocationIndicator = null;

    /**
     * @ElementName enforceMscValidation
     * @Type bool
     * @var bool|null
     */
    private $enforceMscValidation = null;

    /**
     * @ElementName enableOfficeZoneAnnouncement
     * @Type bool
     * @var bool|null
     */
    private $enableOfficeZoneAnnouncement = null;

    /**
     * @ElementName enhanceOfficeZone
     * @Type bool
     * @var bool|null
     */
    private $enhanceOfficeZone = null;

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


}


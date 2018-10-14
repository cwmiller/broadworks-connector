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
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator|null
     */
    private $physicalLocationIndicator = null;

    /**
     * @ElementName enforceMscValidation
     * @var bool|null
     */
    private $enforceMscValidation = null;

    /**
     * @ElementName enableOfficeZoneAnnouncement
     * @var bool|null
     */
    private $enableOfficeZoneAnnouncement = null;

    /**
     * @ElementName enhanceOfficeZone
     * @var bool|null
     */
    private $enhanceOfficeZone = null;

    /**
     * Getter for physicalLocationIndicator
     *
     * @ElementName physicalLocationIndicator
     * @return \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator|null
     */
    public function getPhysicalLocationIndicator()
    {
        return $this->physicalLocationIndicator;
    }

    /**
     * Setter for physicalLocationIndicator
     *
     * @ElementName physicalLocationIndicator
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator|null $physicalLocationIndicator
     * @return $this
     */
    public function setPhysicalLocationIndicator(\CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator $physicalLocationIndicator)
    {
        $this->physicalLocationIndicator = $physicalLocationIndicator;
        return $this;
    }

    /**
     * Getter for enforceMscValidation
     *
     * @ElementName enforceMscValidation
     * @return bool|null
     */
    public function getEnforceMscValidation()
    {
        return $this->enforceMscValidation;
    }

    /**
     * Setter for enforceMscValidation
     *
     * @ElementName enforceMscValidation
     * @param bool|null $enforceMscValidation
     * @return $this
     */
    public function setEnforceMscValidation($enforceMscValidation)
    {
        $this->enforceMscValidation = $enforceMscValidation;
        return $this;
    }

    /**
     * Getter for enableOfficeZoneAnnouncement
     *
     * @ElementName enableOfficeZoneAnnouncement
     * @return bool|null
     */
    public function getEnableOfficeZoneAnnouncement()
    {
        return $this->enableOfficeZoneAnnouncement;
    }

    /**
     * Setter for enableOfficeZoneAnnouncement
     *
     * @ElementName enableOfficeZoneAnnouncement
     * @param bool|null $enableOfficeZoneAnnouncement
     * @return $this
     */
    public function setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement)
    {
        $this->enableOfficeZoneAnnouncement = $enableOfficeZoneAnnouncement;
        return $this;
    }

    /**
     * Getter for enhanceOfficeZone
     *
     * @ElementName enhanceOfficeZone
     * @return bool|null
     */
    public function getEnhanceOfficeZone()
    {
        return $this->enhanceOfficeZone;
    }

    /**
     * Setter for enhanceOfficeZone
     *
     * @ElementName enhanceOfficeZone
     * @param bool|null $enhanceOfficeZone
     * @return $this
     */
    public function setEnhanceOfficeZone($enhanceOfficeZone)
    {
        $this->enhanceOfficeZone = $enhanceOfficeZone;
        return $this;
    }


}


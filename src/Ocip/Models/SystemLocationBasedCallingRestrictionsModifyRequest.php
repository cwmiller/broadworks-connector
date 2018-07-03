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
 */
class SystemLocationBasedCallingRestrictionsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName physicalLocationIndicator
     * @var string|null
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
     * @return string|null
     */
    public function getPhysicalLocationIndicator()
    {
        return $this->physicalLocationIndicator;
    }

    /**
     * Setter for physicalLocationIndicator
     *
     * @ElementName physicalLocationIndicator
     * @param string|null $physicalLocationIndicator
     * @return $this
     */
    public function setPhysicalLocationIndicator($physicalLocationIndicator)
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


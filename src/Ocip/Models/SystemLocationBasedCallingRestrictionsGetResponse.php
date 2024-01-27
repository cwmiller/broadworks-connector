<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLocationBasedCallingRestrictionsGetResponse
 *
 * Response to SystemLocationBasedCallingRestrictionsGetRequest.
 *         
 *         Replaced by: SystemLocationBasedCallingRestrictionsGetResponse17sp3
 *
 * @see SystemLocationBasedCallingRestrictionsGetRequest
 * @see SystemLocationBasedCallingRestrictionsGetResponse17sp3
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28016","type":"sequence"}]
 */
class SystemLocationBasedCallingRestrictionsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName physicalLocationIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator
     * @Group d8f04177e438f303b41c211e518706bf:28016
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhysicalLocationIndicator|null
     */
    protected $physicalLocationIndicator = null;

    /**
     * @ElementName enforceMscValidation
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28016
     * @var bool|null
     */
    protected $enforceMscValidation = null;

    /**
     * @ElementName enableOfficeZoneAnnouncement
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28016
     * @var bool|null
     */
    protected $enableOfficeZoneAnnouncement = null;

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
}


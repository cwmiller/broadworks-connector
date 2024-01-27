<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetAnnouncementResponse22
 *
 * Response to the GroupRoutePointGetAnnouncementRequest22.
 *
 * @see GroupRoutePointGetAnnouncementRequest22
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:371","type":"sequence"}]
 */
class GroupRoutePointGetAnnouncementResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead22
     * @Group e474d11df9a1d1d1041e589793e40de8:371
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead22|null
     */
    protected $mediaOnHoldSource = null;

    /**
     * Getter for mediaOnHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead22
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead22 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead22 $mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldSource()
    {
        $this->mediaOnHoldSource = null;
        return $this;
    }
}


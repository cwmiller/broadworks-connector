<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetAnnouncementResponse
 *
 * Response to the GroupRoutePointGetAnnouncementRequest.
 *
 * @see GroupRoutePointGetAnnouncementRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:12416","type":"sequence"}]
 */
class GroupRoutePointGetAnnouncementResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17
     * @Group d8f04177e438f303b41c211e518706bf:12416
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17|null
     */
    protected $mediaOnHoldSource = null;

    /**
     * Getter for mediaOnHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource)
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


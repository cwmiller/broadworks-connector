<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetAnnouncementResponse20
 *
 * Response to the GroupRoutePointGetAnnouncementRequest20.
 *
 * @see GroupRoutePointGetAnnouncementRequest20
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:12140","type":"sequence"}]
 */
class GroupRoutePointGetAnnouncementResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20
     * @Group ab0042aa512abc10edb3c55e4b416b0b:12140
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20|null
     */
    private $mediaOnHoldSource = null;

    /**
     * Getter for mediaOnHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20 $mediaOnHoldSource)
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


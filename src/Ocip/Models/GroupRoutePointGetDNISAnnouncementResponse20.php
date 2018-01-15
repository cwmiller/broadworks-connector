<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetDNISAnnouncementResponse20
 *
 * Response to the GroupRoutePointGetDNISAnnouncementRequest20.
 */
class GroupRoutePointGetDNISAnnouncementResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaOnHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20|null
     */
    private $mediaOnHoldSource = null;

    /**
     * Getter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20|null
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20|null $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource($mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }


}


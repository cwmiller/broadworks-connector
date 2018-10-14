<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetDNISAnnouncementRequest19
 *
 * Get a route point's DNIS Announcements
 *         The response is either a GroupRoutePointGetDNISAnnouncementResponse19 or
 * an ErrorResponse.
 *
 * @see GroupRoutePointGetDNISAnnouncementResponse19
 * @see ErrorResponse
 */
class GroupRoutePointGetDNISAnnouncementRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $dnisKey = null;

    /**
     * Getter for dnisKey
     *
     * @ElementName dnisKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @ElementName dnisKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }


}


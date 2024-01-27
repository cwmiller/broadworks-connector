<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISAnnouncementRequest22
 *
 * Get a call center's DNIS Announcements
 *         The response is either a GroupCallCenterGetDNISAnnouncementResponse22 or an ErrorResponse.
 *
 * @see GroupCallCenterGetDNISAnnouncementResponse22
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:4341","type":"sequence"}]
 */
class GroupCallCenterGetDNISAnnouncementRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Group 4d65d3449061c568639c8cc1e2492285:4341
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    protected $dnisKey = null;

    /**
     * Getter for dnisKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisKey()
    {
        $this->dnisKey = null;
        return $this;
    }
}


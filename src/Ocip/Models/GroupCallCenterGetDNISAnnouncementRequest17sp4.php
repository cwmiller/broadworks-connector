<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISAnnouncementRequest17sp4
 *
 * Get a call center's DNIS Announcements
 *         The response is either a GroupCallCenterGetDNISAnnouncementResponse17sp4 or an ErrorResponse.
 *     
 *     Replaced by: GroupCallCenterGetDNISAnnouncementRequest19.
 *
 * @see GroupCallCenterGetDNISAnnouncementResponse17sp4
 * @see ErrorResponse
 * @see GroupCallCenterGetDNISAnnouncementRequest19
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:5500","type":"sequence"}]
 */
class GroupCallCenterGetDNISAnnouncementRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Group d8f04177e438f303b41c211e518706bf:5500
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


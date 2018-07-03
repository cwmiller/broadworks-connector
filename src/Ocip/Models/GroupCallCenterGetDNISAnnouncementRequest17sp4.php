<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISAnnouncementRequest17sp4
 *
 * Get a call center's DNIS Announcements
 *         The response is either a GroupCallCenterGetDNISAnnouncementRequest17sp4
 * or an ErrorResponse.
 *     
 *     Replaced by: GroupCallCenterGetDNISAnnouncementRequest19.
 *
 * @see GroupCallCenterGetDNISAnnouncementRequest17sp4
 * @see ErrorResponse
 * @see GroupCallCenterGetDNISAnnouncementRequest19
 */
class GroupCallCenterGetDNISAnnouncementRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
    public function setDnisKey($dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }


}


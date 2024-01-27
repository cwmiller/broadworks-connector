<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementRequest16
 *
 * Get a call center's announcement settings.
 *         The response is either a GroupCallCenterGetAnnouncementResponse16 or an ErrorResponse.
 *
 * @see GroupCallCenterGetAnnouncementResponse16
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:5205","type":"sequence"}]
 */
class GroupCallCenterGetAnnouncementRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:5205
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }
}


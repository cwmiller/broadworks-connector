<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementRequest19
 *
 * Get a call center's announcement settings.
 *         The response is either a GroupCallCenterGetAnnouncementResponse19 or an ErrorResponse.
 *
 * @see GroupCallCenterGetAnnouncementResponse19
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:1991","type":"sequence"}]
 */
class GroupCallCenterGetAnnouncementRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1991
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


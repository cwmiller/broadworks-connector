<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterComfortMessageBypassGetRequest17
 *
 * Get a call center's comfort message bypass settings.
 *         The response is either a GroupCallCenterComfortMessageBypassGetResponse17 or an ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterComfortMessageBypassGetRequest20
 *
 * @see GroupCallCenterComfortMessageBypassGetResponse17
 * @see ErrorResponse
 * @see GroupCallCenterComfortMessageBypassGetRequest20
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:4825","type":"sequence"}]
 */
class GroupCallCenterComfortMessageBypassGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4825
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


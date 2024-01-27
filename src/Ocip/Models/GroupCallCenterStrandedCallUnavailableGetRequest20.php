<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterStrandedCallUnavailableGetRequest20
 *
 * Get a call center's stranded calls - unavailable settings.
 *         The response is either a GroupCallCenterStrandedCallUnavailableGetResponse20 or an ErrorResponse.
 *
 * @see GroupCallCenterStrandedCallUnavailableGetResponse20
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:5852","type":"sequence"}]
 */
class GroupCallCenterStrandedCallUnavailableGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:5852
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


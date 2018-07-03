<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointOverflowGetRequest20
 *
 * Get a route point's overflow settings.
 *         The response is either a GroupRoutePointOverflowGetResponse20 or an
 * ErrorResponse.
 *
 * @see GroupRoutePointOverflowGetResponse20
 * @see ErrorResponse
 */
class GroupRoutePointOverflowGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }


}


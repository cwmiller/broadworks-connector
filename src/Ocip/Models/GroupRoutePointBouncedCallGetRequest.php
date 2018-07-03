<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointBouncedCallGetRequest
 *
 * Get a route point's bounced call settings.
 *         The response is either a GroupRoutePointBouncedCallGetResponse or an
 * ErrorResponse.
 *
 * @see GroupRoutePointBouncedCallGetResponse
 * @see ErrorResponse
 */
class GroupRoutePointBouncedCallGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


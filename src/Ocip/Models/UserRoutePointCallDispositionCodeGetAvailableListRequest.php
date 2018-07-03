<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointCallDispositionCodeGetAvailableListRequest
 *
 * Get the list of available Route Point Call Disposition Codes to be used by a
 * client.
 *         The response is either
 * UserRoutePointCallDispositionCodeGetAvailableListResponse or ErrorResponse.
 *
 * @see UserRoutePointCallDispositionCodeGetAvailableListResponse
 * @see ErrorResponse
 */
class UserRoutePointCallDispositionCodeGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


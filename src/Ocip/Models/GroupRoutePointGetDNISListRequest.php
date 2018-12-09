<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetDNISListRequest
 *
 * Get a list of DNIS that are configured for a Route Point.
 *         The response is either GroupRoutePointGetDNISListResponse or ErrorResponse.
 *
 * @see GroupRoutePointGetDNISListResponse
 * @see ErrorResponse
 * @Groups [{"id":"08c06bb3683a696d340b1644025134a4:446","type":"sequence"}]
 */
class GroupRoutePointGetDNISListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 08c06bb3683a696d340b1644025134a4:446
     * @var string|null
     */
    private $serviceUserId = null;

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


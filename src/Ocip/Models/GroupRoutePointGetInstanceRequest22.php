<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetInstanceRequest22
 *
 * Request to get all the information of a Route Point instance.
 *         The response is either GroupRoutePointGetInstanceResponse22 or ErrorResponse.
 *         Replaced by GroupRoutePointGetInstanceRequest23.
 *
 * @see GroupRoutePointGetInstanceResponse22
 * @see ErrorResponse
 * @see GroupRoutePointGetInstanceRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:4405","type":"sequence"}]
 */
class GroupRoutePointGetInstanceRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:4405
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetInstanceRequest
 *
 * Request to get all the information of a Route Point instance.
 *         The response is either GroupRoutePointGetInstanceResponse or ErrorResponse.
 *         
 *         Replaced by: GroupRoutePointGetInstanceRequest19sp1
 *
 * @see GroupRoutePointGetInstanceResponse
 * @see ErrorResponse
 * @see GroupRoutePointGetInstanceRequest19sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:12561","type":"sequence"}]
 */
class GroupRoutePointGetInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:12561
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


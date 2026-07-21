<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetInstanceRequest24
 *
 * Request to get all the information of a Route Point instance.
 *         The response is either GroupRoutePointGetInstanceResponse24 or ErrorResponse.
 *         The Following elements are only used in AS data mode and ignored in XS data mode:
 * 	    - sendCallAdmissionNotification, use value ‘false’ in XS data mode.
 * 	    - callAdmissionTimerSeconds, use value ‘3’ in XS data mode.
 *         Replaced by: GroupRoutePointGetInstanceRequestRI.
 *
 * @see GroupRoutePointGetInstanceResponse24
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:4782","type":"sequence"}]
 */
class GroupRoutePointGetInstanceRequest24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:4782
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


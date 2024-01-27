<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetInstanceRequest23
 *
 * Request to get all the information of a Route Point instance.
 *         The response is either GroupRoutePointGetInstanceResponse23 or ErrorResponse.
 *         The Following elements are only used in AS data mode and ignored in XS data mode:
 * 	    - sendCallAdmissionNotification, use value ‘false’ in XS data mode.
 * 	    - callAdmissionTimerSeconds, use value ‘3’ in XS data mode.
 *
 * @see GroupRoutePointGetInstanceResponse23
 * @see ErrorResponse
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:605","type":"sequence"}]
 */
class GroupRoutePointGetInstanceRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e474d11df9a1d1d1041e589793e40de8:605
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


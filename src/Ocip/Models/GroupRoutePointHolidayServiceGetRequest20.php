<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointHolidayServiceGetRequest20
 *
 * Get a route point's holiday service settings.
 *         The response is either a GroupRoutePointHolidayServiceGetResponse20 or
 * an ErrorResponse.
 */
class GroupRoutePointHolidayServiceGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


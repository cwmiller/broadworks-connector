<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostRoutingPoliciesGetRequest
 *
 * Get a flexible seating host’s routing policies
 *         The response is either a GroupFlexibleSeatingHostRoutingPoliciesGetResponse or an ErrorResponse.
 *
 * @see GroupFlexibleSeatingHostRoutingPoliciesGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"93e99b1f9cf4a71b31301a1fe7f0e190:314","type":"sequence"}]
 */
class GroupFlexibleSeatingHostRoutingPoliciesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 93e99b1f9cf4a71b31301a1fe7f0e190:314
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


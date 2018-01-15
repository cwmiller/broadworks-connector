<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceRequest20
 *
 * Request to get all the information of a Hunt Group instance.
 *         The response is either GroupHuntGroupGetInstanceResponse20 or
 * ErrorResponse.
 */
class GroupHuntGroupGetInstanceRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


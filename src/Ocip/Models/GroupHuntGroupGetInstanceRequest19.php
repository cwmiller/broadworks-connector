<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceRequest19
 *
 * Request to get all the information of a Hunt Group instance.
 *         The response is either GroupHuntGroupGetInstanceResponse19 or
 * ErrorResponse.
 *         
 *         Replaced by: GroupHuntGroupGetInstanceRequest19sp1
 */
class GroupHuntGroupGetInstanceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


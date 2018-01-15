<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceRequest19sp1
 *
 * Request to get all the information of a Hunt Group instance.
 *         The response is either GroupHuntGroupGetInstanceResponse19sp1 or
 * ErrorResponse.
 *         
 *         Replaced by: GroupHuntGroupGetInstanceRequest20
 */
class GroupHuntGroupGetInstanceRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


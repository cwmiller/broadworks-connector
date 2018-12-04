<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceRequest19sp1
 *
 * Request to get all the information of a Hunt Group instance.
 *         The response is either GroupHuntGroupGetInstanceResponse19sp1 or ErrorResponse.
 *         
 *         Replaced by: GroupHuntGroupGetInstanceRequest20
 *
 * @see GroupHuntGroupGetInstanceResponse19sp1
 * @see ErrorResponse
 * @see GroupHuntGroupGetInstanceRequest20
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:8919","type":"sequence"}]
 */
class GroupHuntGroupGetInstanceRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:8919
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


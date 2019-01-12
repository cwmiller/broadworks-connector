<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetInstanceRequest
 *
 * Request to get all the information of a Find-me/Follow-me instance.
 *         The response is either GroupFindMeFollowMeGetInstanceResponse or ErrorResponse.
 *         Replaced by: GroupFindMeFollowMeGetInstanceRequest19sp1
 *
 * @see GroupFindMeFollowMeGetInstanceResponse
 * @see ErrorResponse
 * @see GroupFindMeFollowMeGetInstanceRequest19sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:28986","type":"sequence"}]
 */
class GroupFindMeFollowMeGetInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28986
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


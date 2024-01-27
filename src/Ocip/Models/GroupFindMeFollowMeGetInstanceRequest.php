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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:9968","type":"sequence"}]
 */
class GroupFindMeFollowMeGetInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:9968
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


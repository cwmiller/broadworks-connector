<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetInstanceRequest19sp1
 *
 * Request to get all the information of a Find-me/Follow-me instance.
 *         The response is either GroupFindMeFollowMeGetInstanceResponse19sp1 or ErrorResponse.
 *
 * @see GroupFindMeFollowMeGetInstanceResponse19sp1
 * @see ErrorResponse
 * @Groups [{"id":"79f226053ee345f2ff4c37c37c8e9114:378","type":"sequence"}]
 */
class GroupFindMeFollowMeGetInstanceRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:378
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


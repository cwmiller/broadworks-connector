<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceRequest19
 *
 * Request to get all the information of a Auto Attendant instance.
 *         The response is either GroupAutoAttendantGetInstanceResponse19 or ErrorResponse.
 *         
 *         Replaced by: GroupAutoAttendantGetInstanceRequest19sp1 in AS data mode
 *
 * @see GroupAutoAttendantGetInstanceResponse19
 * @see ErrorResponse
 * @see GroupAutoAttendantGetInstanceRequest19sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:1662","type":"sequence"}]
 */
class GroupAutoAttendantGetInstanceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1662
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


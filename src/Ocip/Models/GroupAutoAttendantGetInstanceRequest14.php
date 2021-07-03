<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceRequest14
 *
 * Request to get all the information of a Auto Attendant instance.
 *         The response is either GroupAutoAttendantGetInstanceResponse14 or ErrorResponse.
 *         Replaced By: GroupAutoAttendantGetInstanceRequest16
 *
 * @see GroupAutoAttendantGetInstanceResponse14
 * @see ErrorResponse
 * @see GroupAutoAttendantGetInstanceRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:3714","type":"sequence"}]
 */
class GroupAutoAttendantGetInstanceRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:3714
     * @MinLength 1
     * @MaxLength 161
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


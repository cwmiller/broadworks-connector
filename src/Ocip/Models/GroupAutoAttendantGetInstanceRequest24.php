<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceRequest24
 *
 * Request to get all the information of an Auto Attendant instance.
 *         The response is either GroupAutoAttendantGetInstanceResponse24 or ErrorResponse.
 *
 * @see GroupAutoAttendantGetInstanceResponse24
 * @see ErrorResponse
 * @Groups [{"id":"ec63a55bc41262b2dd33a1f4e8e84674:339","type":"sequence"}]
 */
class GroupAutoAttendantGetInstanceRequest24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:339
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


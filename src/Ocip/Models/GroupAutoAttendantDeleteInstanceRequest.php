<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantDeleteInstanceRequest
 *
 * Delete a Auto Attendant instance from a group.
 *                 
 *         If UnassignPhoneNumbersLevel is set to 'Group', the user's primary phone number, fax number and any alternate numbers, will be unassigned from the group if the command is executed by a service provider administrator or above.
 *         When set to 'Service Provider', they will be unassigned from the group and service provider if the command is executed by a provisioning administrator or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse with the type warning will be returned if any number cannot be unassigned because of insufficient privilege.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec63a55bc41262b2dd33a1f4e8e84674:220","type":"sequence"}]
 */
class GroupAutoAttendantDeleteInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:220
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


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantDeleteInstanceRequest
 *
 * Delete a Auto Attendant instance from a group.
 *                 
 *         If UnassignPhoneNumbersLevel is set to 'Group', the user's primary phone
 * number, fax number and any alternate numbers, will be unassigned from the group
 * if the command is executed by a service provider administrator or above.
 *         When set to 'Service Provider', they will be unassigned from the group
 * and service provider if the command is executed by a provisioning administrator
 * or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse with the type warning will be returned if any number
 * cannot be unassigned because of insufficient privilege.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantDeleteInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


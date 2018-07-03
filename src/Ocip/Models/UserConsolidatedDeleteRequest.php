<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConsolidatedDeleteRequest
 *
 * Request to delete a user.
 *         
 *         If deleteExistingDevices is set to true, after the user is deleted, any
 * device that is only used by the deleted user prior to the deletion will be
 * deleted if the command is executed with the correct priviledge.
 *          Group administrator or above running this command can delete any group
 * level devices. Service provider administrator or above can delete any service
 * provider and group devices. Provisioning administrator or above can delete any
 * devices. 
 *          An ErrorResponse will be returned if any device cannot be deleted
 * because of insufficient privilege.
 *
 *          If UnassignPhoneNumbersLevel is set to 'Group', the user's primary
 * phone number, fax number and any alternate numbers, will be un-assigned from the
 * group if the command is executed by a service provider administrator or above.
 *           When set to 'Service Provider', they will be un-assigned from the
 * group and service provider if the command is executed by a provisioning
 * administrator or above.
 *           When omitted, the number(s) will be left assigned to the group.
 *          An ErrorResponse will be returned if any number cannot be unassigned
 * because of insufficient privilege.
 *
 * @see ErrorResponse
 * @see ErrorResponse
 */
class UserConsolidatedDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName deleteExistingDevices
     * @var bool|null
     */
    private $deleteExistingDevices = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @var string|null
     */
    private $unassignPhoneNumbers = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for deleteExistingDevices
     *
     * @ElementName deleteExistingDevices
     * @return bool|null
     */
    public function getDeleteExistingDevices()
    {
        return $this->deleteExistingDevices;
    }

    /**
     * Setter for deleteExistingDevices
     *
     * @ElementName deleteExistingDevices
     * @param bool|null $deleteExistingDevices
     * @return $this
     */
    public function setDeleteExistingDevices($deleteExistingDevices)
    {
        $this->deleteExistingDevices = $deleteExistingDevices;
        return $this;
    }

    /**
     * Getter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @return string|null
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @param string|null $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers($unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConsolidatedDeleteRequest
 *
 * Request to delete a user.
 *         
 *         If deleteExistingDevices is set to true, after the user is deleted, any device that is only used by the deleted user prior to the deletion will be deleted if the command is executed with the correct priviledge.
 *          Group administrator or above running this command can delete any group level devices. Service provider administrator or above can delete any service provider and group devices. Provisioning administrator or above can delete any devices. 
 *          An ErrorResponse will be returned if any device cannot be deleted because of insufficient privilege.
 *
 *          If UnassignPhoneNumbersLevel is set to 'Group', the user's primary phone number, fax number and any alternate numbers, will be un-assigned from the group if the command is executed by a service provider administrator or above.
 *           When set to 'Service Provider', they will be un-assigned from the group and service provider if the command is executed by a provisioning administrator or above.
 *           When omitted, the number(s) will be left assigned to the group.
 *          An ErrorResponse will be returned if any number cannot be unassigned because of insufficient privilege.
 *         The response is either SuccessResponse or ErrorResponse
 *
 * @see ErrorResponse
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1337","type":"sequence"}]
 */
class UserConsolidatedDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1337
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName deleteExistingDevices
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1337
     * @var bool|null
     */
    private $deleteExistingDevices = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1337
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel|null
     */
    private $unassignPhoneNumbers = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for deleteExistingDevices
     *
     * @return bool
     */
    public function getDeleteExistingDevices()
    {
        return $this->deleteExistingDevices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteExistingDevices;
    }

    /**
     * Setter for deleteExistingDevices
     *
     * @param bool $deleteExistingDevices
     * @return $this
     */
    public function setDeleteExistingDevices($deleteExistingDevices)
    {
        $this->deleteExistingDevices = $deleteExistingDevices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteExistingDevices()
    {
        $this->deleteExistingDevices = null;
        return $this;
    }

    /**
     * Getter for unassignPhoneNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers(\CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnassignPhoneNumbers()
    {
        $this->unassignPhoneNumbers = null;
        return $this;
    }


}


<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityMobileIdentityConsolidatedDeleteRequest
 *
 * Delete a mobile identity from the user's list of mobile identities.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         An ErrorResponse will be returned if any device cannot be deleted because of insufficient privilege.
 *         When a delete request is attempted on the primary mobile identity, the delete will fail unless it is the last mobile identity in the user's list.
 *         
 *         If deleteExistingDevices is set to true, after the mobile identity is deleted, any device that is only used by the deleted mobile identity prior to the deletion will be deleted if the command is executed with the correct priviledge.
 *   Group administrator or above running this command can delete any group level devices. Service provider administrator or above can delete any service provider and group devices. Provisioning administrator or above can delete any devices. 
 *   An ErrorResponse with the type warning will be returned if any device cannot be deleted because of insufficient privilege.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1464","type":"sequence"}]
 */
class UserBroadWorksMobilityMobileIdentityConsolidatedDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1464
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1464
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $mobileNumber = null;

    /**
     * @ElementName deleteExistingDevices
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1464
     * @var bool|null
     */
    private $deleteExistingDevices = null;

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
     * Getter for mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @param string $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNumber()
    {
        $this->mobileNumber = null;
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


}


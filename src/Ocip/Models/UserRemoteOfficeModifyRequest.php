<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRemoteOfficeModifyRequest
 *
 * Modify the user level data associated with Remote Office.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserRemoteOfficeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName remoteOfficePhoneNumber
     * @var string|null
     */
    private $remoteOfficePhoneNumber = null;

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
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for remoteOfficePhoneNumber
     *
     * @ElementName remoteOfficePhoneNumber
     * @return string|null
     */
    public function getRemoteOfficePhoneNumber()
    {
        return $this->remoteOfficePhoneNumber;
    }

    /**
     * Setter for remoteOfficePhoneNumber
     *
     * @ElementName remoteOfficePhoneNumber
     * @param string|null $remoteOfficePhoneNumber
     * @return $this
     */
    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber)
    {
        $this->remoteOfficePhoneNumber = $remoteOfficePhoneNumber;
        return $this;
    }


}


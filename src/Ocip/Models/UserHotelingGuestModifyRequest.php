<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestModifyRequest
 *
 * Modify the user level data associated with Hoteling Guest.
 *         There is no provisioning error will be given when setting hostUserId to
 * not nil value while Hoteling Guest feature is not active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by UserHotelingGuestModifyRequest21 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserHotelingGuestModifyRequest21
 */
class UserHotelingGuestModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enableAssociationLimit
     * @Type bool
     * @var bool|null
     */
    private $enableAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName hostUserId
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hostUserId = null;

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
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for enableAssociationLimit
     *
     * @return bool
     */
    public function getEnableAssociationLimit()
    {
        return $this->enableAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAssociationLimit;
    }

    /**
     * Setter for enableAssociationLimit
     *
     * @param bool $enableAssociationLimit
     * @return $this
     */
    public function setEnableAssociationLimit($enableAssociationLimit)
    {
        $this->enableAssociationLimit = $enableAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAssociationLimit()
    {
        $this->enableAssociationLimit = null;
        return $this;
    }

    /**
     * Getter for associationLimitHours
     *
     * @return int
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->associationLimitHours;
    }

    /**
     * Setter for associationLimitHours
     *
     * @param int $associationLimitHours
     * @return $this
     */
    public function setAssociationLimitHours($associationLimitHours)
    {
        $this->associationLimitHours = $associationLimitHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssociationLimitHours()
    {
        $this->associationLimitHours = null;
        return $this;
    }

    /**
     * Getter for hostUserId
     *
     * @return string|null
     */
    public function getHostUserId()
    {
        return $this->hostUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostUserId;
    }

    /**
     * Setter for hostUserId
     *
     * @param string|null $hostUserId
     * @return $this
     */
    public function setHostUserId($hostUserId)
    {
        if ($hostUserId === null) {
            $this->hostUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hostUserId = $hostUserId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostUserId()
    {
        $this->hostUserId = null;
        return $this;
    }


}

